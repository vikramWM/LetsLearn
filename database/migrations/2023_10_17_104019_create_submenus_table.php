<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmenusTable extends Migration
{
    public function up()
    {
        Schema::create('submenus', function (Blueprint $table) {
            $table->id();
            $table->string('sub_menu_name', 255)->nullable();
            $table->unsignedBigInteger('menus_id')->nullable();
            $table->boolean('show')->nullable();
            $table->string('routes', 255)->nullable();
            $table->timestamps(); // Optional, if you want to track creation and update timestamps.
            
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('submenus');
    }
}
