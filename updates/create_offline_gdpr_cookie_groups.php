<?php namespace OFFLINE\GDPR\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOfflineGdprCookieGroups extends Migration
{
    public function up()
    {
        Schema::create('offline_gdpr_cookie_groups', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->string('slug')->nullable()->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('initial_status')->default(1);
            $table->boolean('required')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offline_gdpr_cookie_groups');
    }
}
