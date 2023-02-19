<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('product_units', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('type')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_units');
    }
}
