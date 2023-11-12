<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePagesTables extends Migration
{
    public function up()
    {
        Schema::create('service_pages', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('service_page_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'service_page');
            $table->string('title', 200)->nullable();
            $table->string('sub_title', 200)->nullable();
            $table->text('description')->nullable();
            $table->json('services')->nullable();
            $table->text('block_description')->nullable();
            $table->string('block_title', 200)->nullable();
        });

        Schema::create('service_page_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'service_page');
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_page_revisions');
        Schema::dropIfExists('service_page_translations');
        Schema::dropIfExists('service_pages');
    }
}
