<?php namespace OFFLINE\GDPR\Models;

use Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Sortable;

class CookieGroup extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use Sluggable;
    use Sortable;

    public $table = 'offline_gdpr_cookie_groups';
    public $slugs = [
        'slug' => 'name',
    ];
    public $rules = [
        'name' => 'required',
    ];
    public $casts = [
        'initial_status' => 'boolean',
    ];
    public $hasMany = [
        'cookies' => [Cookie::class, 'key' => 'cookie_group_id']
    ];
}
