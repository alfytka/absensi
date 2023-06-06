<?php

namespace App\Http\Controllers;

use App\Http\Requests\KelasRequest;
use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kelas.index', [
            'datakelas' => Kelas::latest()->get(),
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelasRequest $request)
    {
        $kelas = [
            'nama_kelas' => $request->nama_kelas
        ];
        Kelas::create($kelas);
        return redirect(route('kelas.index'))->with('info', 'Berhasil menambah data kelas.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.kelas.edit', [
            'kelasf' => Kelas::where('id', $id)->first(),
            'datakelas' => Kelas::all()
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
    public function update(KelasRequest $request, $id)
    {
        $kelas = [
            'nama_kelas' => $request->nama_kelas
        ];

        Kelas::find($id)->update($kelas);
        return redirect(route('kelas.index'))->with('info', 'Berhasil menambah data kelas.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::find($id)->delete();
        return redirect(route('kelas.index'))->with('info', 'Berhasil menghapus data kelas.');
    }
}
