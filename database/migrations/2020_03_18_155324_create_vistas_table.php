<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vistas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->ipAddress('ip_cliente');
            $table->unsignedBigInteger('pais_id');
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('pais_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vistas');
    }
}
