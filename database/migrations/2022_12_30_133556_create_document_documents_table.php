<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('document_documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->text('comment')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('area_id')->nullable();
            $table->foreign('area_id')->references('id')->on('administrative_areas');
            $table->unsignedBigInteger('file_id');
            $table->foreign('file_id')->references('id')->on('document_files');
            $table->string('status');
            $table->string('version');
            $table->string('file');
            $table->string('file_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('document_documents');
    }
};
