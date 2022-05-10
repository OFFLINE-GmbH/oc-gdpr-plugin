<?php namespace OFFLINE\GDPR\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class ChangeUseragentFieldType extends Migration
{
    public function up()
    {
        Schema::table('offline_gdpr_logs', function ($table) {
            $table->text('useragent')->nullable()->change();
        });
    }

    public function down()
    {
        // Do nothing.
    }
}
