<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Session;


class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaji = Gaji::with('jabatan', 'karyawan')->get();
        return view('admin.gaji.index', compact('gaji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengambil data author
        $jabatan = Jabatan::all();
        $karyawan = Karyawan::all();
        return view('admin.gaji.create', compact('jabatan', 'karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required',
            'jabatan_id' => 'required',
            'gaji_pokok' => 'required',
            'tunjangan' => 'required',
            'jabatan_id' => 'required',
            'lembur' => 'required',
            'potongan' => 'required',
            // 'total' => 'required',
        ]);

        $gaji = new Gaji;
        $gaji->karyawan_id = $request->karyawan_id;
        $gaji->jabatan_id = $request->jabatan_id;
        $gaji->gaji_pokok = $request->gaji_pokok;
        $gaji->tunjangan = $request->tunjangan;
        $gaji->lembur = $request->lembur;
        $gaji->potongan = $request->potongan;
        $gaji->total = $gaji->gaji_pokok + $gaji->tunjangan + $gaji->lembur - $gaji->potongan;
        $gaji->save();
        return redirect()->route('gaji.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gaji = Gaji::findOrFail($id);
        return view('admin.gaji.show', compact('gaji'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gaji = Gaji::findOrFail($id);
        $jabatan = Jabatan::all();
        $karyawan = Karyawan::all();
        return view('admin.gaji.edit', compact('gaji', 'karyawan', 'jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'karyawan_id' => 'required',
            'jabatan_id' => 'required',
            'gaji_pokok' => 'required',
            'tunjangan' => 'required',
            'lembur' => 'required',
            'potongan' => 'required',
            // 'total' => 'required',
        ]);

        $gaji = Gaji::findOrFail($id);
        $gaji->karyawan_id = $request->karyawan_id;
        $gaji->jabatan_id = $request->jabatan_id;
        $gaji->gaji_pokok = $request->gaji_pokok;
        $gaji->tunjangan = $request->tunjangan;
        $gaji->lembur = $request->lembur;
        $gaji->potongan = $request->potongan;
        $gaji->total = $gaji->gaji_pokok + $gaji->tunjangan + $gaji->lembur - $gaji->potongan;
        $gaji->save();
        return redirect()->route('gaji.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gaji = Gaji::findOrFail($id);
        $gaji->delete();
        return redirect()->route('gaji.index');
    }
}
