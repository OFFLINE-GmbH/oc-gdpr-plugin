<?php namespace OFFLINE\GDPR\Models;

use Carbon\Carbon;
use Model;

class Log extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'offline_gdpr_logs';

    const UNDECIDED = 'undecided';
    const ACCEPTED = 'accepted';
    const DECLINED = 'declined';

    public $rules = [
        'session_id' => 'required',
        'decision' => 'required',
    ];

    public $fillable = ['decision', 'session_id'];

    public function gdprCleanup(Carbon $deadline, int $keepDays)
    {
        self::where('created_at', '<', $deadline)->delete();
    }
}
