<?php

namespace App\Http\Controllers;

use App\Http\Requests\PengajarRequest;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pengajar.index', [
            'datapengajar' => Pengajar::all(),
            'datakelas' => Kelas::all(),
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
    public function store(PengajarRequest $request)
    {
        $pengajar = [
            'id_guru' => $request->id_guru,
            'id_kelas' => $request->id_kelas
        ];

        Pengajar::create($pengajar);
        return redirect(route('pengajar.index'))->with('info', 'Berhasil menambahkan data pengajar.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.pengajar.edit', [
            'pengajars' => Pengajar::where('id', $id)->first(),
            'datapengajar' => Pengajar::all(),
            'datakelas' => Kelas::all(),
            'dataguru' => Guru::all()
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
        Pengajar::find($id)->delete();
        return redirect(route('pengajar.index'))->with('info', 'Berhasil menghapus data pengajar.');
    }
}
