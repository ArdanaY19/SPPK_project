<?php

namespace App\Http\Controllers;

use App\Models\h_kriteria;
use App\Models\kriteria;
use Illuminate\Http\Request;

class H_KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $h_kriterias = h_kriteria::all();
        return view('admin.h_kriteria.h_kriteria', compact('h_kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = kriteria::all();
        return view('admin.h_kriteria.c_hkriteria', compact('kriteria'));
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
            'kriteria_id' => ['required'],
            'nama_himpunan' => ['required'],
            'nilai' => ['required'],
            'keterangan' => ['required'],
        ]);

        $data = new h_kriteria;
        $data->kriteria_id = $request->kriteria_id;
        $data->nama_himpunan = $request->nama_himpunan;
        $data->nilai = $request->nilai;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('h_kriteria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kriteria = kriteria::all();
        $h_kriteria = h_kriteria::find($id);
        return view('admin.h_kriteria.u_hkriteria', compact('h_kriteria', 'kriteria'));
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
            'kriteria_id' => ['required'],
            'nama_himpunan' => ['required'],
            'nilai' => ['required'],
            'keterangan' => ['required'],
        ]);

        $data = h_kriteria::find($id);
        $data->kriteria_id = $request->kriteria_id;
        $data->nama_himpunan = $request->nama_himpunan;
        $data->nilai = $request->nilai;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('h_kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $h_kriteria = h_kriteria::where('id', $id)->first();
        $h_kriteria->delete();

        return redirect('h_kriteria');
    }
}
