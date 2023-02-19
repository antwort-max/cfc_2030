<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('color')->nullable();
            $table->string('comment')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tags');
    }
};
