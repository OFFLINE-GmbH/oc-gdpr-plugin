<?php namespace OFFLINE\GDPR\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use OFFLINE\GDPR\Classes\Cookies\ConsentCookie;
use OFFLINE\GDPR\Models\CookieGroup;
use OFFLINE\GDPR\Models\GDPRSettings;
use OFFLINE\GDPR\Models\Log;

class CookieBanner extends ComponentBase
{
    public $cookieGroups;

    public $hide = false;

    public $updatePartial = '';

    public $updateSelector = '';

    public $cookieManagerPage;

    /**
     * @var ConsentCookie
     */
    public $consentCookie;

    public function componentDetails()
    {
        return [
            'name'        => 'Cookie Banner',
            'description' => 'offline.gdpr::lang.cookie_banner.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'include_css'         => [
                'title'       => 'offline.gdpr::lang.cookie_banner.include_css.title',
                'description' => 'offline.gdpr::lang.cookie_banner.include_css.description',
                'default'     => 1,
                'type'        => 'checkbox',
            ],
            'update_partial'      => [
                'title'       => 'offline.gdpr::lang.cookie_banner.update_partial.title',
                'description' => 'offline.gdpr::lang.cookie_banner.update_partial.description',
                'type'        => 'string',
            ],
            'update_selector'     => [
                'title'       => 'offline.gdpr::lang.cookie_banner.update_selector.title',
                'description' => 'offline.gdpr::lang.cookie_banner.update_selector.description',
                'default'     => '#gdpr-reload',
                'type'        => 'string',
            ],
            'cookie_manager_page' => [
                'title'       => 'offline.gdpr::lang.cookie_banner.cookie_manager_page.title',
                'description' => 'offline.gdpr::lang.cookie_banner.cookie_manager_page.description',
                'type'        => 'dropdown',
            ],
        ];
    }

    public function init()
    {
        $this->consentCookie     = new ConsentCookie();
        $this->updatePartial     = $this->property('update_partial', '');
        $this->updateSelector    = $this->property('update_selector', '#gdpr-reload');
        $this->cookieManagerPage = $this->property('cookie_manager_page');
        $this->cookieGroups      = CookieGroup::with('cookies')->orderBy('sort_order', 'ASC')->get();
    }

    public function onRun()
    {
        if ($this->consentCookie->isDecided()) {
            $this->hide = true;

            return;
        }

        if (GDPRSettings::get('log_enabled')) {
            Log::updateOrCreate(
                ['session_id' => Session::getId()],
                ['decision' => Log::UNDECIDED, 'useragent' => Request::userAgent()]
            );
        }

        if ($this->property('include_css')) {
            $this->addCss('assets/cookieBanner/banner.css');
        }
    }

    public function onAccept()
    {
        $cookie = $this->setDefaultConsent();

        $response = Response::make([]);

        if ($this->updateSelector && $this->updatePartial) {
            $content = $this->renderPartial($this->updatePartial, [
                'cookieGroups' => $this->cookieGroups,
                'consentCookie' => $this->consentCookie,
            ]);

            $response = Response::make([
                $this->updateSelector => $content,
                'content' => $content,
                'consentCookie' => $this->consentCookie->get(),
            ]);
        }

        return $response->withCookie($cookie);
    }

    public function onDecline()
    {
        $cookie = $this->consentCookie->set(false);

        return Response::make(['result' => 'declined'])->withCookie($cookie);
    }

    public function onRefresh()
    {
        return [
            $this->updateSelector => $this->renderPartial($this->updatePartial),
        ];
    }

    protected function getCookieGroups()
    {
        return CookieGroup::with('cookies')->orderBy('sort_order', 'ASC')->get();
    }

    protected function setDefaultConsent()
    {
        $cookies = $this->getCookieGroups()->flatMap(function ($group) {
            return $group->cookies;
        })->filter(function ($item) {
            return $item->initial_status;
        })->pluck('max_level', 'code')->toArray();

        return $this->consentCookie->set($cookies);
    }

    public function getCookie_manager_pageOptions()
    {
        return [null => '-- ' . trans('offline.gdpr::lang.cookie_banner.cookie_manager_page.empty')]
            + Page::getNameList();
    }
}
