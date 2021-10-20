<?php namespace OFFLINE\GDPR\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddUserAgentToLogsTable extends Migration
{
    public function up()
    {
        Schema::table('offline_gdpr_logs', function ($table) {
            $table->string('useragent')->nullable();
        });
    }

    public function down()
    {
        Schema::table('offline_gdpr_logs', function ($table) {
            $table->dropColumn(['useragent']);
        });
    }
}
