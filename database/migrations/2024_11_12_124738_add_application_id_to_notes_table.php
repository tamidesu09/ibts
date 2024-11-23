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
    Schema::table('notes', function (Blueprint $table) {
        $table->unsignedBigInteger('application_id'); // Add the application_id column
        $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade'); // Add foreign key constraint
    });
}

public function down()
{
    Schema::table('notes', function (Blueprint $table) {
        $table->dropForeign(['application_id']); // Drop the foreign key constraint
        $table->dropColumn('application_id'); // Drop the column
    });
}

};
