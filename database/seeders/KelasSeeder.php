<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
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
                'nama_kelas' => 'XII IPA 1'
            ],
            [
                'nama_kelas' => 'XII IPS 1'
            ],
            [
                'nama_kelas' => 'XI IPA 1'
            ],
            [
                'nama_kelas' => 'XI IPS 1'
            ],
            [
                'nama_kelas' => 'X IPA 1'
            ],
            [
                'nama_kelas' => 'X IPS 1'
            ],
            [
                'nama_kelas' => 'X IPS 2'
            ],
        ])->each(function($kelas) {
            Kelas::create($kelas);
        });
    }
}
