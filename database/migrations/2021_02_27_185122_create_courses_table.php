<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('course_title');
            $table->longText('about_course');
            $table->longText('about_description');
            $table->string('course_duration_hour');
            $table->string('course_duration_minute');
            $table->string('course_duration_second');
            $table->string('benefits_of_the_course');
            $table->string('requirements');
            $table->string('target_audience');
            $table->string('materials_included');
            $table->text('what_will_learn');
            $table->longText('topics_of_course');
            $table->string('categories');
            $table->date('coursef_start_date');
            $table->date('coursef_end_date');
            $table->string('maximum_students')->default(0);
            $table->string('status')->default(1);
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
        Schema::dropIfExists('courses');
    }
}
