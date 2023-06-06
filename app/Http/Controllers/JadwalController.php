<?php

namespace App\Http\Controllers;

use App\Http\Requests\JadwalRequest;
use App\Models\Guru;
use App\Models\Jadwal_mapel;
use App\Models\Mata_pelajaran;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jadwal.index', [
            'jadwals' => Jadwal_mapel::all(),
            'dataguru' => Guru::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwal.add', [
            'dataguru' => Guru::all(),
            'mapels' => Mata_pelajaran::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JadwalRequest $request)
    {
        $jadwal = [
            'id_pengajar' => $request->id_pengajar,
            'id_mapel' => $request->id_mapel,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai
        ];

        Jadwal_mapel::create($jadwal);
        return redirect(route('jadwal-pembelajaran.index'))->with('info', 'Berhasil menambahkan data jadwal pembelajaran.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jadwal_mapel::find($id)->delete();
        return redirect(route('jadwal-pembelajaran.index'))->with('info', 'Berhasil menghapus jadwal pembelajaran.');
    }
}
