<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mata_pelajaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru', 'id');
    }

    public function jadwalMapel()
    {
        return $this->hasMany(Jadwal_mapel::class, 'id_mapel', 'id');
    }

}
