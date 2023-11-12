<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTables extends Migration
{
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->json('testimonials')->nullable();
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('testimonial_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'testimonial');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('testimonial_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'testimonial');
        });
    }

    public function down()
    {
        Schema::dropIfExists('testimonial_revisions');
        Schema::dropIfExists('testimonial_translations');
        Schema::dropIfExists('testimonials');
    }
}
