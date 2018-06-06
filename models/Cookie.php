<?php namespace OFFLINE\GDPR\Models;

use Model;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Sortable;

class Cookie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use Sortable;
    use Sluggable;

    public $table = 'offline_gdpr_cookies';
    public $slugs = [
        'code' => 'name'
    ];
    public $rules = [
        'name' => 'required',
    ];
    public $casts = [
        'initial_status' => 'boolean',
    ];
    public $jsonable = [
        'levels'
    ];
    public $belongsTo = [
        'group' => [CookieGroup::class, 'key' => 'cookie_group_id']
    ];
}
