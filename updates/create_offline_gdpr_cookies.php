<?php namespace OFFLINE\GDPR\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOfflineGdprCookies extends Migration
{
    public function up()
    {
        Schema::create('offline_gdpr_cookies', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->string('code')->nullable()->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('initial_status')->default(1);
            $table->text('levels')->nullable();
            $table->integer('cookie_group_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offline_gdpr_cookies');
    }
}
