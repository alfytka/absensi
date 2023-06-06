<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Http\Requests\UpSiswaRequest;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.siswa.index', [
            'siswas' => Siswa::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.add', [
            'datakelas' => Kelas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiswaRequest $request)
    {
        $siswa = [
            'id_kelas' => $request->id_kelas,
            'nama' => $request->nama,
            'nis' => $request->nis,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin
        ];
        Siswa::create($siswa);
        return redirect(route('siswa.index'))->with('info', 'Berhasil menambah data siswa.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.siswa.edit', [
            'siswas' => Siswa::where('id', $id)->first(),
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
    public function update(UpSiswaRequest $request, $id)
    {
        if (!$request->password)
        {
            $siswa = [
                'id_kelas' => $request->id_kelas,
                'nama' => $request->nama,
                'nis' => $request->nis,
                'email' => $request->email,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin
            ];
            Siswa::find($id)->update($siswa);
        } else {
            $siswaWithPass = [
                'id_kelas' => $request->id_kelas,
                'nama' => $request->nama,
                'nis' => $request->nis,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin
            ];
            Siswa::find($id)->update($siswaWithPass);
        }
        return redirect(route('siswa.index'))->with('info', 'Berhasil mengubah data siswa.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::find($id)->delete();
        return redirect(route('siswa.index'))->with('info', 'Berhasil menghapus data siswa.');
    }
}
