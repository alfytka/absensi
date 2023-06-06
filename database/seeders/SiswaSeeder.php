<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
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
                'id_kelas' => '1',
                'nama' => 'Farhana',
                'nis' => '42186579',
                'email' => 'farhana@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0822 7738 6877',
                'alamat' => 'Jr. Imam No. 561, Administrasi Jakarta Timur 65950, SumUt',
                'jenis_kelamin' => 'laki-laki'
            ],
            [
                'id_kelas' => '1',
                'nama' => 'Cameludin',
                'nis' => '33519724',
                'email' => 'cmludin@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0877386877',
                'alamat' => 'Jl. Yang Lurus No. 99, Banjar 45219, Jawa Barat',
                'jenis_kelamin' => 'laki-laki'
            ],
            [
                'id_kelas' => '1',
                'nama' => 'Oliva Nasyidah',
                'nis' => '32516714',
                'email' => 'oliv@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0820 2996 5854',
                'alamat' => 'Gg. Kali No. 210, Palopo 57301, DIY',
                'jenis_kelamin' => 'perempuan'
            ],
            [
                'id_kelas' => '1',
                'nama' => 'Raisa Nasyiah',
                'nis' => '10865329',
                'email' => 'raisa@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '08295445998',
                'alamat' => 'Ds. Tangkuban Perahu No. 98, Palangka Raya 70271, DKI',
                'jenis_kelamin' => 'perempuan'
            ],
            [
                'id_kelas' => '1',
                'nama' => 'Nadia Rahayu',
                'nis' => '76476294',
                'email' => 'nadia@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0823 2920 175',
                'alamat' => 'Ki. Baha No. 268, Sibolga 42823, KalSel',
                'jenis_kelamin' => 'perempuan'
            ],
            [
                'id_kelas' => '1',
                'nama' => 'Hari Prayoga',
                'nis' => '38725580',
                'email' => 'hari@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0858 9773 4038',
                'alamat' => 'Ds. Gajah No. 248, Palu 31232, SulTeng',
                'jenis_kelamin' => 'laki-laki'
            ],
            [
                'id_kelas' => '1',
                'nama' => 'Eka Widodo',
                'nis' => '26639117',
                'email' => 'eka@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0849 5534 729',
                'alamat' => 'Dk. Setia Budi No. 371, Bekasi 41550, DIY',
                'jenis_kelamin' => 'laki-laki'
            ],
            [
                'id_kelas' => '1',
                'nama' => 'Shania Usamah',
                'nis' => '56823982',
                'email' => 'shania@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0876 2685 2942',
                'alamat' => 'Jln. Jayawijaya No. 442, Balikpapan 77287, Jambi',
                'jenis_kelamin' => 'perempuan'
            ],
            [
                'id_kelas' => '1',
                'nama' => 'Hafshah Hastuti',
                'nis' => '49658739',
                'email' => 'hafshah@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0860 0983 905',
                'alamat' => 'Kpg. Sunaryo No. 993, Administrasi Jakarta Timur 40022, SumBar',
                'jenis_kelamin' => 'perempuan'
            ],
            [
                'id_kelas' => '1',
                'nama' => 'Kenzie Pangestu',
                'nis' => '52716392',
                'email' => 'kenzie@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0895 6773 328',
                'alamat' => 'Gg. Kebangkitan Nasional No. 465, Bekasi 28602, SulBar',
                'jenis_kelamin' => 'laki-laki'
            ],
            [
                'id_kelas' => '2',
                'nama' => 'Abyasa Jailani',
                'nis' => '84791325',
                'email' => 'abyasa@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0879 5228 8207',
                'alamat' => 'Jr. Banda No. 330, Blitar 84154, KalTim',
                'jenis_kelamin' => 'laki-laki'
            ],
            [
                'id_kelas' => '2',
                'nama' => 'Tedi Sihombing',
                'nis' => '0247214',
                'email' => 'tedi@gmail.com',
                'password' => bcrypt('siswa'),
                'telepon' => '0824 8722 168',
                'alamat' => 'Ds. Bazuka Raya No. 514, Batam 40978, SulUt',
                'jenis_kelamin' => 'laki-laki'
            ],
        ])->each(function($siswa) {
            Siswa::create($siswa);
        });
    }
}
