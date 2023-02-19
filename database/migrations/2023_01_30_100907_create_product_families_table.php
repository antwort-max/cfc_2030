<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFamiliesTable extends Migration
{
    public function up()
    {
        Schema::create('product_families', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('mother')->nullable();
            $table->string('image')->nullable();
            $table->string('comment')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_families');
    }
}
