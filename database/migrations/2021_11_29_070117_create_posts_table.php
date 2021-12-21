<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id')->nullable();
            $table->integer('subcat_id')->nullable();
            $table->integer('dist_id')->nullable();
            $table->integer('subdist_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('title_bn')->nullable();
            $table->text('title_en')->nullable();
            $table->string('image_first')->nullable();
            $table->string('image_second')->nullable();
            $table->string('image_third')->nullable();
            $table->text('details_bn')->nullable();
            $table->text('details_en')->nullable();
            $table->text('tags_bn')->nullable();
            $table->text('tags_en')->nullable();
            $table->integer('headline')->nullable();
            $table->integer('first_section')->nullable();
            $table->integer('first_section_thumbnail')->nullable();
            $table->integer('big_thumbnail')->nullable();
            $table->string('post_date');
            $table->string('post_month');
            $table->string('soft_delete')->nullable()->default(0);
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
        Schema::dropIfExists('posts');
    }
}
