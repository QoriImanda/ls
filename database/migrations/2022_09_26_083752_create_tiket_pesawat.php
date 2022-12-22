<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketPesawat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket_pesawats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('user_id');
            $table->string('awal_keberangkatan');
            $table->string('tujuan_keberangkatan');
            $table->integer('no_penerbangan');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiket_pesawats');
    }
}
