<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('unit')->nullable();
            $table->text('comment')->nullable();
            $table->string('image')->nullable();
            $table->double('stock')->nullable();
            $table->double('price')->nullable();
            $table->double('offer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_products');
    }
}
