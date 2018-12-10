<?php namespace OFFLINE\GDPR\Models;

use Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Sortable;
use OFFLINE\GDPR\Classes\Traits\SortableRelation;

class CookieGroup extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use Sluggable;
    use Sortable;
    use SortableRelation;

    public $table = 'offline_gdpr_cookie_groups';
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name', 'description'];
    public $fillable = [
        'sort_order',
        'slug',
        'name',
        'description',
        'required',
    ];
    public $slugs = [
        'slug' => 'name',
    ];
    public $rules = [
        'name' => 'required',
        'description' => 'required',
    ];
    public $hasMany = [
        'cookies' => [
            Cookie::class,
            'key'      => 'cookie_group_id',
            'otherKey' => 'id',
            'order'    => 'sort_order',
            'table'    => 'offline_gdpr_cookies',
        ],
    ];
}
