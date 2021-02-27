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
            $table->longText('course_title');
            $table->longText('about_course');
            $table->longText('about_description');
            $table->text('heading_title');
            $table->text('title_1');
            $table->text('title_2');
            $table->text('title_3');
            $table->text('title_4');
            $table->text('title_5');
            $table->text('title_6');
            $table->text('title_7');
            $table->text('title_8');
            $table->longText('topic_heading_one');
            $table->longText('topic_description_one');
            $table->longText('topic_heading_two');
            $table->longText('topic_description_two');
            $table->longText('topic_heading_three');
            $table->longText('topic_description_three');
            $table->text('topic_heading_four');
            $table->longText('topic_description_four');
            $table->text('topic_heading_five');
            $table->longText('topic_description_five');
            $table->text('topic_heading_six');
            $table->longText('topic_description_six');
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
