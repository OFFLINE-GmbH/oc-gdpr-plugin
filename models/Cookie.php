<?php namespace OFFLINE\GDPR\Models;

use Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Sortable;

class Cookie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use Sortable;
    use Sluggable;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name', 'description', 'levels'];
    public $table = 'offline_gdpr_cookies';
    public $slugs = [
        'code' => 'name',
    ];
    public $rules = [
        'name' => 'required',
        'description' => 'required',
    ];
    public $casts = [
        'initial_status' => 'boolean',
    ];
    public $jsonable = [
        'levels',
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
}
