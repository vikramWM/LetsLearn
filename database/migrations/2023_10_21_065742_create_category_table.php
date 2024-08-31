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
    Schema::create('category', function (Blueprint $table) {
        $table->id(); // Auto-incremental primary key
        $table->string('category'); // A column for the category name
        $table->text('images'); // A column for storing image paths (you may want to use a different data type like JSON for multiple images)
        $table->timestamps(); // Created at and updated at timestamps
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
