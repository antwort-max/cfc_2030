<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_menus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('menu');
            $table->string('name');
            $table->string('favicon');
            $table->string('route');
            $table->string('can');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_menus');
    }
};
