<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prayer', function (Blueprint $table) {
            $table->id();
            $table->string('fajr')->nullable();
            $table->string('dhuhr')->nullable();
            $table->text('asr')->nullable();
            $table->text('maghrib')->nullable();
            $table->string('isha')->nullable(); 
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
        Schema::dropIfExists('prayer');
    }
}
