<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->text('comment')->nullable();
            $table->string('image')->nullable();
            $table->string('packet_name')->nullable();
            $table->string('packet_convert')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
