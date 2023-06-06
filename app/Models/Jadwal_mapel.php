<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_mapel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class, 'id_pengajar', 'id');
    }

    public function mataPelajaran()
    {
        return $this->belongsTo(Mata_pelajaran::class, 'id_mapel', 'id');
    }

    public function absen()
    {
        return $this->belongsTo(Absen::class, 'id_jadwal_mapel', 'id');
    }

}
