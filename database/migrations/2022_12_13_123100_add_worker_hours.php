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
        Schema::table('worker_hours', function (Blueprint $table) {
            $table->string('type')->nullable();
            $table->boolean('register')->nullable();
            $table->time('start')->nullable();
            $table->time('end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('worker_hours', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('register');
            $table->dropColumn('start');
            $table->dropColumn('end');
    
        });
    }
};
