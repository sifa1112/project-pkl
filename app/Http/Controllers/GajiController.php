<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\User;
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
        $gaji = Gaji::with('jabatan', 'karyawan', 'user')->get();
        return view('admin.gaji.index', compact('gaji'));
    }

    public function laporan()
    {
        $laporan = Gaji::all();
        return view('admin.gaji.laporan', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengambil data
        $jabatan = Jabatan::all();
        $karyawan = Karyawan::all();
        $user = User::all();
        // dd(Jabatan::findOrFail(2)->tunjangan);
        return view('admin.gaji.create', compact('jabatan', 'karyawan', 'user'));
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
            // 'jabatan_id' => 'required',
            // //'gaji_pokok' => 'required',
            // 'tunjangan' => 'required',
            // //'jabatan_id' => 'required',
            // // 'lembur' => 'required',
            'karyawan_id' => 'required',
            'potongan' => 'required',
            // 'total' => 'required',
        ]);

        $potongan = 0;
        if ($request->potongan == 'BPJS Kesehatan') {
            $potongan = 50000;
        } else if ($request->potongan == 'JHT') {
            $potongan = 65000;
        } else if ($request->potongan == 'Jaminan Pensiun') {
            $potongan = 70000;
        } else if ($request->potongan == 'Jaminan Pensiun' && 'BPJS Kesehatan') {
            $potongan = 120000;
        } else if ($request->potongan == 'Jaminan Pensiun' && 'JHT') {
            $potongan = 135000;
        } else if ($request->potongan == 'BPJS Kesehatan' && 'JHT') {
            $potongan = 115000;
        }

        $gaji = new Gaji;
        $gaji->karyawan_id = $request->karyawan_id;
        // $gaji->jabatan_id = $request->jabatan_id;
        // $price = Jabatan::findOrFail($request->jabatan_id);
        // $gaji->nama_jabatan = $price->nama_jabatan;
        // $gaji->tunjangan = Jabatan::findOrFail($request->jabatan_id)->tunjangan;
        $jabatan = Jabatan::findOrFail($request->karyawan_id);
        $a = $jabatan->gaji_pokok + $jabatan->tunjangan;

        $gaji->potongan = $potongan;

        $gaji->total = $a - $gaji->potongan;
        $gaji->save();
        // dd($request->all());
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan  $gaji->karyawan_id  ",
        ]);

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
        $user = User::all();
        return view('admin.gaji.edit', compact('gaji', 'karyawan', 'jabatan', 'user'));
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
            // 'karyawan_id' => 'required',
            // 'jabatan_id' => 'required',
            // 'gaji_pokok' => 'required',
            // 'tunjangan' => 'required',
            // 'lembur' => 'required',
            'potongan' => 'required',
            // 'total' => 'required',
        ]);

        $potongan = 0;
        if ($request->potongan == 'BPJS Kesehatan') {
            $potongan = 50000;
        } else if ($request->potongan == 'JHT') {
            $potongan = 65000;
        } else if ($request->potongan == 'Jaminan Pensiun') {
            $potongan = 70000;
        }

        $gaji = Gaji::findOrFail($id);
        $gaji->karyawan_id = $request->karyawan_id;
        $jabatan = Jabatan::findOrFail($request->karyawan_id);
        $a = $jabatan->gaji_pokok + $jabatan->tunjangan;
        $gaji->potongan = $potongan;
        $gaji->total = $a - $gaji->potongan;
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
