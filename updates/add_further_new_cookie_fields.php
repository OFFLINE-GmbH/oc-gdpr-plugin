<?php namespace OFFLINE\GDPR\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddFurtherNewCookieFields extends Migration
{
    public function up()
    {
        Schema::table('offline_gdpr_cookies', function ($table) {
            $table->string('provider')->nullable();
            $table->text('item_details')->nullable();
        });
    }

    public function down()
    {
        Schema::table('offline_gdpr_cookies', function ($table) {
            $table->dropColumn(['provider']);
            $table->dropColumn(['item_details']);
        });
    }
}
