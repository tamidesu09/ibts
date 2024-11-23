<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::table('applications', function (Blueprint $table) {
        $table->foreignId('job_id')->nullable()->constrained('jobs')->onDelete('cascade');
    });
}


public function down()
{
    Schema::table('applications', function (Blueprint $table) {
        $table->dropForeign(['job_id']);
        $table->dropColumn('job_id');
    });
}

};
