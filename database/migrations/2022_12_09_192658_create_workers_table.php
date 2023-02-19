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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->string('dni');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('comment')->nullable();
            $table->string('image')->nullable();
            $table->string('position')->nullable();
            $table->string('address')->nullable();
            $table->date('birth')->nullable();
            $table->date('start')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
};
