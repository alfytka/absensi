<?php

namespace Database\Seeders;

use App\Models\Pengajar;
use Illuminate\Database\Seeder;

class PengajarSeeder extends Seeder
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
                'id_kelas' => '1'
            ],
            [
                'id_guru' => '1',
                'id_kelas' => '2'
            ],
            [
                'id_guru' => '2',
                'id_kelas' => '1'
            ],
            [
                'id_guru' => '2',
                'id_kelas' => '2'
            ],
            [
                'id_guru' => '3',
                'id_kelas' => '1'
            ],
            [
                'id_guru' => '3',
                'id_kelas' => '2'
            ],
            [
                'id_guru' => '4',
                'id_kelas' => '3'
            ],
            [
                'id_guru' => '4',
                'id_kelas' => '4'
            ],
            [
                'id_guru' => '5',
                'id_kelas' => '5'
            ],
        ])->each(function($pengajar) {
            Pengajar::create($pengajar);
        });
    }
}
