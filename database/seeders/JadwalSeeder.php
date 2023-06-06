<?php

namespace Database\Seeders;

use App\Models\Jadwal_mapel;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'id_pengajar' => '1',
                'id_mapel' => '1',
                'hari' => 'Senin',
                'jam_mulai' => '1',
                'jam_selesai' => '2'
            ],
            [
                'id_pengajar' => '2',
                'id_mapel' => '2',
                'hari' => 'Senin',
                'jam_mulai' => '2',
                'jam_selesai' => '4'
            ],
            [
                'id_pengajar' => '3',
                'id_mapel' => '3',
                'hari' => 'Senin',
                'jam_mulai' => '4',
                'jam_selesai' => '5'
            ],
            [
                'id_pengajar' => '4',
                'id_mapel' => '4',
                'hari' => 'Senin',
                'jam_mulai' => '5',
                'jam_selesai' => '8'
            ],
            [
                'id_pengajar' => '1',
                'id_mapel' => '1',
                'hari' => 'Selasa',
                'jam_mulai' => '1',
                'jam_selesai' => '3'
            ],
            [
                'id_pengajar' => '2',
                'id_mapel' => '2',
                'hari' => 'Selasa',
                'jam_mulai' => '3',
                'jam_selesai' => '4'
            ],
        ])->each(function($jadwal) {
            Jadwal_mapel::create($jadwal);
        });
    }
}
