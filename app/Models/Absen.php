<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function jadwalMapel()
    {
        return $this->hasMany(Jadwal_mapel::class, 'id_jadwal_mapel', 'id');
    }

    public function absenDetail()
    {
        return $this->belongsTo(Absen_detail::class, 'id_absen', 'id');
    }

}
