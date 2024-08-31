<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_name', 255)->nullable();
            $table->string('icon_class', 255)->nullable();
            $table->string('show_menu', 255)->nullable();
            $table->string('routes', 255)->nullable();
            $table->timestamps(); // Optional, if you want to track creation and update timestamps.
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
