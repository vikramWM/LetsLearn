<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration
{
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->id(); // Auto-incremental ID
            $table->string('role', 255); // 'role' column of type VARCHAR with a maximum length of 255
            // You can add additional columns here if needed
            $table->timestamps(); // Optional, adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('role');
    }
}