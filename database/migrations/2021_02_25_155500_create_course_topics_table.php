<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_topics', function (Blueprint $table) {
            $table->id();
            $table->text('topic_heading_one');
            $table->longText('topic_description_one');
            $table->text('topic_heading_two');
            $table->longText('topic_description_two');
            $table->text('topic_heading_three');
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
        Schema::dropIfExists('course_topics');
    }
}
