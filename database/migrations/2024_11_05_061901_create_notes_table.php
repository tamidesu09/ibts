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
    Schema::create('notes', function (Blueprint $table) {
        $table->id();
        $table->string('name');         // Note title
        $table->text('content');        // Note content
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('notes');
}

};
