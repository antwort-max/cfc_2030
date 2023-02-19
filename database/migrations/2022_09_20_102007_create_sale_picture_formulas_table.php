<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalePictureFormulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_picture_formulas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('brand')->nullable();
            $table->string('formula')->nullable();
            $table->string('product')->nullable();
            $table->string('document')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_mail')->nullable();
            $table->string('client_phone')->nullable();
            $table->string('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_picture_formulas');
    }
}
