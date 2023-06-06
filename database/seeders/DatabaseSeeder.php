<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(GuruSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(MatapelajaranSeeder::class);
        $this->call(PengajarSeeder::class);
        $this->call(SiswaSeeder::class);
    }
}
