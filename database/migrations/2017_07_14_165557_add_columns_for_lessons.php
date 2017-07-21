<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsForLessons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Add required columns to lessons table
        Schema::table('lessons', function (Blueprint $table) {
            $table->string('description');
            $table->integer('view_count')->nullable();
            $table->string('preview_duration')->nullable();
            $table->string('full_duration')->nullable();
            $table->integer('Token_price_30')->nullable();
            $table->integer('Token_price_60')->nullable();
            $table->integer('Token_price_90')->nullable();
            $table->string('youtube_id')->nullable();
            $table->string('vimeo_id')->nullable();
            $table->string('lesson_name_slug')->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('view_count');
            $table->dropColumn('preview_duration');
            $table->dropColumn('full_duration');
            $table->dropColumn('Token_price_30');
            $table->dropColumn('Token_price_60');
            $table->dropColumn('Token_price_90');
            $table->dropColumn('youtube_id');
            $table->dropColumn('vimeo_id');
            $table->dropColumn('lesson_name_slug');
        });
    }
}

