<?php namespace OFFLINE\GDPR\Controllers;

use Backend\Behaviors\ListController;
use Backend\Classes\Controller;
use BackendMenu;
use OFFLINE\GDPR\Models\Log;
use DB;

class Logs extends Controller
{
    public $implement = [ListController::class];

    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'offline.gdpr.manage_logs',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OFFLINE.GDPR', 'main-menu-item');
    }

    public function index()
    {
        parent::index();
        $this->vars['stats'] = collect([
            'total' => Log::count(),
            'byState' => DB
                ::table('offline_gdpr_logs')
                ->select(
                    "decision as label",
                    DB::raw('count(session_id) as value')
                )
                ->groupBy("decision")
                ->get(),
        ]);
    }
}
