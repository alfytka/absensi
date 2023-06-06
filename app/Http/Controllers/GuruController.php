<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuruRequest;
use App\Http\Requests\UpGuruRequest;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.guru.index', [
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
        return view('admin.guru.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuruRequest $request)
    {
        $guru = [
            'nip' => $request->nip,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => $request->role
        ];

        Guru::create($guru);
        return redirect(route('guru.index'))->with('info', 'Berhasil menambah data guru.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.guru.edit', [
            'guru' => Guru::where('id', $id)->first()
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
    public function update(UpGuruRequest $request, $id)
    {
        if (!$request->password)
        {
            $guru = [
                'nip' => $request->nip,
                'nama' => $request->nama,
                'email' => $request->email,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'role' => $request->role
            ];
            
            Guru::find($id)->update($guru);
            
        } else {
            $guruWithPass = [
                'nip' => $request->nip,
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'role' => $request->role
            ];
            
            Guru::find($id)->update($guruWithPass);
        }

        return redirect(route('guru.index'))->with('info', 'Berhasil mengubah data guru.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guru::find($id)->delete();
        return redirect(route('guru.index'))->with('info', 'Berhasil menghapus data guru.');
    }
}
