<?php namespace OFFLINE\GDPR\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class RemoveGroupInitialStatus extends Migration
{
    public function up()
    {
        Schema::table('offline_gdpr_cookies', function ($table) {
            $table->dropColumn(['initial_status']);
        });
    }

    public function down()
    {
        Schema::table('offline_gdpr_cookies', function ($table) {
            $table->boolean('initial_status')->default(1);
        });
    }
}
