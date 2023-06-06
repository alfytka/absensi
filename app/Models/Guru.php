<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function mataPelajaran()
    {
        return $this->hasMany(Mata_pelajaran::class, 'id_guru', 'id');
    }

    public function pengajar()
    {
        return $this->hasMany(Pengajar::class, 'id_guru', 'id');
    }

}
