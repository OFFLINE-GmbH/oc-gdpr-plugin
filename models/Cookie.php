<?php namespace OFFLINE\GDPR\Models;

use Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Sortable;
use OFFLINE\GDPR\Classes\Traits\TranslatableRelation;

class Cookie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use Sortable;
    use Sluggable;
    use TranslatableRelation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name', 'description', 'levels', 'contact_links_dpo', 'item_details'];
    public $table = 'offline_gdpr_cookies';
    public $slugs = [
        'code' => 'name',
    ];
    public $rules = [
        'name'                => 'required',
        'description'         => 'required',
    ];
    public $casts = [
        'initial_status' => 'boolean',
    ];
    public $jsonable = [
        'levels',
        'contact_links_dpo',
        'item_details',
    ];
    public $belongsTo = [
        'group' => [CookieGroup::class, 'key' => 'cookie_group_id'],
    ];

    public static function boot()
    {
        parent::boot();
        static::saving(function (self $model) {
            $model->levels = $model->enforceSingleDefaultLevel();
        });
    }

    /**
     * Make sure only the upper most default_level is set to true.
     *
     * @return array
     */
    public function enforceSingleDefaultLevel()
    {
        $hasDefault = false;

        return collect($this->levels)->reverse()->map(function ($level) use (&$hasDefault) {
            if ($hasDefault) {
                $level['is_default_level'] = false;

                return $level;
            }
            if ($level['is_default_level']) {
                $hasDefault = true;
            }

            return $level;
        })->reverse()->toArray();
    }

    public function getMaxLevelAttribute()
    {
        return count($this->levels);
    }

    public function getDefaultLevelAttribute()
    {
        return collect($this->levels)->reverse()
                                     ->where('is_default_level', true)
                                     ->keys()
                                     ->first() ?? 0;
    }

    public function getDetailTypeOptions()
    {
        $values = [
            'API',
            'Authentication Cookie',
            'Browser Sniffing',
            'Canvas Fingerprinting',
            'Content Sniffing',
            'Device Fingerprint',
            'Email Web Beacon',
            'Embeded Content',
            'Evercookie',
            'Facebook Beacon',
            'Hidden Form Field',
            'HTTP Authentication',
            'HTTP Cookie',
            'Identifier for Advertisers',
            'Iframes',
            'Indexed Database API (IndexedDB)',
            'IP Address',
            'JSON Web Token (JWT)',
            'Local Shared Objects (Flash Cookie)',
            'localStorage',
            'Persistent Cookie',
            'Push Notification',
            'Session Cookie',
            'sessionStorage',
            'Social Bookmarking',
            'Social Share',
            'Supercookie',
            'Third-party cookie',
            'Timeline',
            'Tracking Cookie',
            'URL (Query String)',
            'Web Annotation',
            'Web Beacon (Tracking Pixel)',
            'Web SQL Database',
            'Web Storage (DOM storage)',
            'Widget',
            'Zombie Cookie',
        ];

        return array_combine($values, $values);
    }
}
