<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('role_id')->nullable();
            $table->string('menu_id')->nullable();
            $table->string('sub_menu_id')->nullable();
            // Add other columns here if needed
            $table->timestamps(); // Optional, adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('permissions');
    }
};
