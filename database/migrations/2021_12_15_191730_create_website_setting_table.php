<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_setting', function (Blueprint $table) {
            $table->id();
            $table->string('site_name_bn')->nullable();
            $table->string('site_name_en')->nullable();
            $table->string('site_logo')->nullable();
            $table->text('site_address_bn')->nullable();
            $table->text('site_address_en')->nullable();
            $table->string('site_phone_bn')->nullable();
            $table->string('site_phone_en')->nullable();
            $table->string('site_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_setting');
    }
}
