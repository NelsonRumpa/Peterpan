<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdddonasiTable extends Migration
{
    public function up()
    {
        Schema::create('adddonasi', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->integer('target');
            $table->date('awal');
            $table->date('akhir');
            $table->string('gambar')->nullable();
            $table->string('metode');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adddonasi');
    }
}

