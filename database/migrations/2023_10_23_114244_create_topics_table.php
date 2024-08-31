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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->string('thumbnail')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('video');
            $table->text('description');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category'); // Assuming you have a 'categories' table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
