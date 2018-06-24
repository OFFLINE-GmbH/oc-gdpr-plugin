<?php namespace OFFLINE\GDPR\Controllers;

use Backend\Behaviors\RelationController;
use Backend\Classes\Controller;
use BackendMenu;
use Flash;
use OFFLINE\GDPR\Models\CookieGroup;
use System\Classes\SettingsManager;
use Backend\Behaviors\ListController;
use Backend\Behaviors\FormController;
use Backend\Behaviors\ReorderController;

class Info extends Controller
{
	
    public $requiredPermissions = [
        'offline.gdpr.manage_cookie_info',
    ];	

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('OFFLINE.GDPR', 'gdpr_info');
        $this->addCss('/plugins/offline/gdpr/assets/backend/styles.css');
		$this->addCss('/plugins/offline/gdpr/assets/backend/prism.css');
		$this->addJs('/plugins/offline/gdpr/assets/backend/prism.js');
    }

    public function index()
    {
        $config = $this->makeConfig('$/offline/gdpr/models/info/fields.yaml');
		
	 	$config->alias = 'info';

        $config->model = new \OFFLINE\GDPR\Models\Info;

        $info = $this->makeWidget('Backend\Widgets\Form', $config);

        $this->vars['info'] = $info;		
    }

    public function dataretention()
    {
        $config = $this->makeConfig('$/offline/gdpr/models/dataretention/fields.yaml');
		
	 	$config->alias = 'dataretention';

        $config->model = new \OFFLINE\GDPR\Models\DataRetention;

        $dataretention = $this->makeWidget('Backend\Widgets\Form', $config);

        $this->vars['dataretention'] = $dataretention;		
    }

    public function bannerlaws()
    {
        $config = $this->makeConfig('$/offline/gdpr/models/bannerlaws/fields.yaml');
		
	 	$config->alias = 'bannerlaws';

        $config->model = new \OFFLINE\GDPR\Models\BannerLaws;

        $bannerlaws = $this->makeWidget('Backend\Widgets\Form', $config);

        $this->vars['bannerlaws'] = $bannerlaws;		
    }

    public function cookieconsent()
    {
        $config = $this->makeConfig('$/offline/gdpr/models/cookieconsent/fields.yaml');
		
	 	$config->alias = 'cookieconsent';

        $config->model = new \OFFLINE\GDPR\Models\CookieConsent;

        $cookieconsent = $this->makeWidget('Backend\Widgets\Form', $config);

        $this->vars['cookieconsent'] = $cookieconsent;		
    }

    public function cookiesmodulesuserguide()
    {
        $config = $this->makeConfig('$/offline/gdpr/models/cookiesmodulesuserguide/fields.yaml');
		
	 	$config->alias = 'cookiesmodulesuserguide';

        $config->model = new \OFFLINE\GDPR\Models\CookiesModulesUserguide;

        $cookiesmodulesuserguide = $this->makeWidget('Backend\Widgets\Form', $config);

        $this->vars['cookiesmodulesuserguide'] = $cookiesmodulesuserguide;		
    }
	
    public function cookiesmodulessetup()
    {
        $config = $this->makeConfig('$/offline/gdpr/models/cookiesmodulessetup/fields.yaml');
		
	 	$config->alias = 'cookiesmodulessetup';

        $config->model = new \OFFLINE\GDPR\Models\CookiesModulesSetup;

        $cookiesmodulessetup = $this->makeWidget('Backend\Widgets\Form', $config);

        $this->vars['cookiesmodulessetup'] = $cookiesmodulessetup;		
    }	

    public function overallinfo()
    {
        $config = $this->makeConfig('$/offline/gdpr/models/overallinfo/fields.yaml');
		
	 	$config->alias = 'overallinfo';

        $config->model = new \OFFLINE\GDPR\Models\OverallInfo;

        $overallinfo = $this->makeWidget('Backend\Widgets\Form', $config);

        $this->vars['overallinfo'] = $overallinfo;		
    }
	
    public function dpolinks()
    {
        $config = $this->makeConfig('$/offline/gdpr/models/dpolinks/fields.yaml');
		
	 	$config->alias = 'dpolinks';

        $config->model = new \OFFLINE\GDPR\Models\DpoLinks;

        $dpolinks = $this->makeWidget('Backend\Widgets\Form', $config);

        $this->vars['dpolinks'] = $dpolinks;		
    }	
								
}