<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('complete_name');
            $table->string('email');        
            $table->string('phone_number')->nullable();  
            $table->string('sex')->nullable(); 
            $table->string('cv_path');       
            $table->string('status')->default('Application Received');
            $table->timestamps();            
            $table->json('skills')->nullable();
            $table->json('educations')->nullable();
            $table->json('experiences')->nullable();
            $table->json('answers')->nullable();
            $table->smallInteger('correct_answers')->default(0);
            $table->text('analysis')->nullable();
            $table->boolean('is_parsed')->default(false);
            $table->foreignId('user_id')->constrained();
            $table->dateTime('access_time')->nullable();
            $table->dateTime('expire_time')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
