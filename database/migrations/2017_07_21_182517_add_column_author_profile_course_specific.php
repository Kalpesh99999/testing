<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnAuthorProfileCourseSpecific extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->unsigned()->index();
            $table->text('author_profile')->nullable();
            $table->string('course_name_slug')->nullable()->index();
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
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('author_profile');
            $table->dropColumn('course_name_slug');
        });
    }
}
