<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_packages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('product_units');
            $table->double('convert')->nullable();
            $table->double('weight')->nullable();
            $table->double('size_x')->nullable();
            $table->double('size_y')->nullable();
            $table->double('size_z')->nullable();
            $table->double('pallet')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_packages');
    }
}
