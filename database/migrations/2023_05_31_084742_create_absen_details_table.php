<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_absen');
            $table->foreignId('id_siswa');
            $table->date('tanggal');
            $table->string('jam');
            $table->enum('status', ['H', 'I', 'S', 'A']);
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
        Schema::dropIfExists('absen_details');
    }
}
