<?php

namespace Database\Seeders;

use App\Models\Mata_pelajaran;
use Illuminate\Database\Seeder;

class MatapelajaranSeeder extends Seeder
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
                'id_guru' => '1',
                'nama_mapel' => 'Bahasa Indonesia'
            ],
            [
                'id_guru' => '2',
                'nama_mapel' => 'Matematika'
            ],
            [
                'id_guru' => '3',
                'nama_mapel' => 'Bahasa Inggris'
            ],
            [
                'id_guru' => '4',
                'nama_mapel' => 'Sejarah Indonesia'
            ],
            [
                'id_guru' => '5',
                'nama_mapel' => 'Fisika'
            ],
            [
                'id_guru' => '1',
                'nama_mapel' => 'Bahasa Arab'
            ],
        ])->each(function($mapel) {
            Mata_pelajaran::create($mapel);
        });
    }
}
