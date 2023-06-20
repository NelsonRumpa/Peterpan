<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('donation_id');
            $table->string('nama');
            $table->integer('no_telepon');
            $table->integer('jmldonasi');
            $table->string('gambar')->nullable();
            $table->tinyInteger('approved')->default(0);
            $table->timestamps();

            $table->foreign('donation_id')->references('id')->on('adddonasi')->onDelete('cascade');
            $table->index(['donation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_user');
    }
}
