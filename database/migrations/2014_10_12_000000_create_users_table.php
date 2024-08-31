<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Create a new migration class that extends the base Migration class
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create a new table called 'users'
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->string('role');

            $table->string('mobile');

            $table->string('countrycode');

            $table->string('email')->unique();

            $table->timestamp('email_verified_at')->nullable();

            $table->string('password');

            // Add a 'remember_token' column for the "Remember Me" functionality
            $table->rememberToken();

            // Add 'created_at' and 'updated_at' columns for timestamps
            $table->timestamps();

            // Add a 'photo' column for the user's photo
            $table->string('photo')->nullable(); // 'nullable()' allows the photo to be optional
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'users' table if rolling back the migration
        Schema::dropIfExists('users');
    }
};
