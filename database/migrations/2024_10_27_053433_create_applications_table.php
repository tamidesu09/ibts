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
            $table->string('complete_name'); // Complete Name (FN, MI, S)
            $table->string('email');         // Email Address
            $table->string('phone_number')->nullable();  // Phone Number
            $table->string('sex')->nullable(); // Sex (Optional)
            $table->string('cv_path');        // Attach Your CV (Path to stored file)
            $table->string('status')->default('Application Received');
            $table->timestamps();             // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
