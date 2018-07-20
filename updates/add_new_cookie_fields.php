<?php namespace OFFLINE\GDPR\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddNewCookieFields extends Migration
{
    public function up()
    {
        Schema::table('offline_gdpr_cookies', function ($table) {
            $table->text('contact_details_dpo')->nullable();
            $table->text('contact_links_dpo')->nullable();
        });
    }

    public function down()
    {
        Schema::table('offline_gdpr_cookies', function ($table) {
            $table->dropColumn(['contact_details_dpo']);
            $table->dropColumn(['contact_links_dpo']);
        });
    }
}
