<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
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
                'nama' => 'Ghaliyati Nuraini',
                'nip' => '2720 1105 1634 1007',
                'email' => 'jkusmawati@yahoo.com',
                'password' => bcrypt('guru'),
                'telepon' => '0429 3290 913',
                'alamat' => 'Psr. Bakti No. 992, Yogyakarta 89911, Papua',
                'jenis_kelamin' => 'perempuan',
                'role' => 'guru',
            ],
            [
                'nama' => 'Kamal Najmudin',
                'nip' => '4024 0071 2009 6465',
                'email' => 'jindra63@uwais.name',
                'password' => bcrypt('guru'),
                'telepon' => '0822 7738 6877',
                'alamat' => 'Jr. Imam No. 561, Administrasi Jakarta Timur 65950, SumUt',
                'jenis_kelamin' => 'laki-laki',
                'role' => 'guru',
            ],
            [
                'nama' => 'Sabar Permadi',
                'nip' => '6011 1079 4130 7966',
                'email' => 'guru@gmail.com',
                'password' => bcrypt('guru'),
                'telepon' => '029 5149 0745',
                'alamat' => 'Gg. Laswi No. 681, Madiun 28513, SumUt',
                'jenis_kelamin' => 'laki-laki',
                'role' => 'guru',
            ],
            [
                'nama' => 'Zaenab Usamah',
                'nip' => '2458 6744 5369 0484',
                'email' => 'jasmin76@yahoo.com',
                'password' => bcrypt('guru'),
                'telepon' => '08321 8318 701',
                'alamat' => 'Ds. Baladewa No. 689, Prabumulih 27804, Banten',
                'jenis_kelamin' => 'perempuan',
                'role' => 'guru',
            ],
            [
                'nama' => 'Zulfa Agustina',
                'nip' => '6011 8543 3258 1705',
                'email' => 'jayeng13@gmail.com',
                'password' => bcrypt('guru'),
                'telepon' => '08377 3445 9153',
                'alamat' => 'Ds. Pacuan Kuda No. 946, Lhokseumawe 62116, SulUt',
                'jenis_kelamin' => 'perempuan',
                'role' => 'guru',
            ],
            [
                'nama' => 'Tania Novitasari',
                'nip' => '2427 8305 1369 3417',
                'email' => 'guru@mail.com',
                'password' => bcrypt('guru'),
                'telepon' => '0824 9272 741',
                'alamat' => 'Jr. M.T. Haryono No. 50, Tasikmalaya 88339, Riau',
                'jenis_kelamin' => 'perempuan',
                'role' => 'guru',
            ]
        ])->each(function($guru) {
            Guru::create($guru);
        });
    }
}
