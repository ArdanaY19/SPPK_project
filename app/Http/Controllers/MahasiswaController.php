<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = mahasiswa::all();
        return view('admin.mahasiswa.mahasiswa', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahasiswa.c_mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_mahasiswa' => ['required'],
            'nim_mahasiswa' => ['required'],
            'prodi' => ['required'],
            'ttl' => ['required'],
        ]);

        $data = new mahasiswa;
        $data->nama_mahasiswa = $request->nama_mahasiswa;
        $data->nim_mahasiswa = $request->nim_mahasiswa;
        $data->prodi = $request->prodi;
        $data->ttl = $request->ttl;
        $data->save();

        return redirect('mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('admin.mahasiswa.u_mahasiswa', compact('mahasiswa'));
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
        $this->validate($request, [
            'nama_mahasiswa' => ['required'],
            'nim_mahasiswa' => ['required'],
            'prodi' => ['required'],
            'ttl' => ['required'],
        ]);

        $data = mahasiswa::find($id);
        $data->nama_mahasiswa = $request->nama_mahasiswa;
        $data->nim_mahasiswa = $request->nim_mahasiswa;
        $data->prodi = $request->prodi;
        $data->ttl = $request->ttl;
        $data->save();

        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = mahasiswa::where('id', $id)->first();
        $mahasiswa->delete();

        return redirect('mahasiswa');
    }
}
