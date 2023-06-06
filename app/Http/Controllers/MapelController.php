<?php

namespace App\Http\Controllers;

use App\Http\Requests\MapelRequest;
use App\Models\Guru;
use App\Models\Mata_pelajaran;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mapel.index', [
            'mapels' => Mata_pelajaran::latest()->get(),
            'dataguru' => Guru::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MapelRequest $request)
    {
        $mapel = [
            'id_guru' => $request->id_guru,
            'nama_mapel' => $request->nama_mapel
        ];

        Mata_pelajaran::create($mapel);
        return redirect(route('mata-pelajaran.index'))->with('info', 'Berhasil menambahkan data mata pelajaran.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.mapel.edit', [
            'mapels' => Mata_pelajaran::where('id', $id)->first(),
            'dataguru' => Guru::all(),
            'datamapel' => Mata_pelajaran::latest()->get()
        ]);
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
    public function update(MapelRequest $request, $id)
    {
        $mapel = [
            'id_guru' => $request->id_guru,
            'nama_mapel' => $request->nama_mapel
        ];

        Mata_pelajaran::find($id)->update($mapel);
        return redirect(route('mata-pelajaran.index'))->with('info', 'Berhasil mengubah data mata pelajaran.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mata_pelajaran::find($id)->delete();
        return redirect(route('mata-pelajaran.index'))->with('info', 'Berhasil menghapus data mata pelajaran.');
    }
}
