<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen_detail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function absen()
    {
        return $this->hasMany(Absen::class, 'id_absen', 'id');
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_siswa', 'id');
    }

}
