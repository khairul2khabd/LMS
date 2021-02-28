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
            $table->string('image')->nullable();
            $table->string('course_title');
            $table->longText('about_course');
            $table->string('course_duration_hour')->nullable();
            $table->string('course_duration_minute')->nullable();
            $table->string('course_duration_second')->nullable();
            $table->string('benefits_of_the_course')->nullable();
            $table->string('requirements')->nullable();
            $table->string('target_audience')->nullable();
            $table->string('materials_included')->nullable();
            $table->text('what_will_learn')->nullable();
            $table->longText('topics_of_course')->nullable();
            $table->string('categories')->nullable();
            $table->date('coursef_start_date')->nullable();
            $table->date('coursef_end_date')->nullable();
            $table->string('maximum_students')->nullable();
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
