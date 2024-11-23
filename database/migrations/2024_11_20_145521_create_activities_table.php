<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->date('date');
            $table->time('hours_start');
            $table->time('hours_end');
            $table->string('location');
            $table->string('attendee');
            $table->text('description');
            $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
};
