<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalMapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_mapels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengajar');
            $table->foreignId('id_mapel');
            $table->string('hari');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
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
        Schema::dropIfExists('jadwal_mapels');
    }
}
