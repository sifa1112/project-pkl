<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Session;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('admin.jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jabatan.create');
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
            'nama_jabatan' => 'required',

        ]);
        $gaji_pokok = 0;
        if ($request->nama_jabatan == 'Direksi') {
            $gaji_pokok = 20000000;
        } else if ($request->nama_jabatan == 'Direktur Utama') {
            $gaji_pokok = 18000000;
        } else if ($request->nama_jabatan == 'Direktur Keuangan') {
            $gaji_pokok = 15000000;
        } else if ($request->nama_jabatan == 'Direktur Personalia') {
            $gaji_pokok = 12000000;
        } else if ($request->nama_jabatan == 'Manager') {
            $gaji_pokok = 10000000;
        } else if ($request->nama_jabatan == 'ADM') {
            $gaji_pokok = 8000000;
        } else if ($request->nama_jabatan == 'Divisi') {
            $gaji_pokok = 5000000;
        }

        $tunjangan = 0;
        if ($request->nama_jabatan == 'Direksi') {
            $tunjangan = 5000000;
        } else if ($request->nama_jabatan == 'Direktur Utama') {
            $tunjangan = 4500000;
        } else if ($request->nama_jabatan == 'Direktur Keuangan') {
            $tunjangan = 4000000;
        } else if ($request->nama_jabatan == 'Direktur Personalia') {
            $tunjangan = 3000000;
        } else if ($request->nama_jabatan == 'Manager') {
            $tunjangan = 2000000;
        } else if ($request->nama_jabatan == 'ADM') {
            $tunjangan = 1000000;
        } else if ($request->nama_jabatan == 'Divisi') {
            $tunjangan = 500000;
        }

        $jabatan = new jabatan;
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->gaji_pokok = $gaji_pokok;
        $jabatan->tunjangan = $tunjangan;
        $jabatan->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "massege" => "Berhasil Menyimpan $jabatan->nama_jabatan",
        ]);
        return redirect()->route('jabatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('admin.jabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('admin.jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jabatan' => 'required',
            // 'gaji_pokok' => 'required',
        ]);

        $gaji_pokok = 0;
        if ($request->nama_jabatan == 'Direksi') {
            $gaji_pokok = 20000000;
        } else if ($request->nama_jabatan == 'Direktur Utama') {
            $gaji_pokok = 18000000;
        } else if ($request->nama_jabatan == 'Direktur Keuangan') {
            $gaji_pokok = 15000000;
        } else if ($request->nama_jabatan == 'Direktur Personalia') {
            $gaji_pokok = 12000000;
        } else if ($request->nama_jabatan == 'Manager') {
            $gaji_pokok = 10000000;
        } else if ($request->nama_jabatan == 'ADM') {
            $gaji_pokok = 8000000;
        } else if ($request->nama_jabatan == 'Divisi') {
            $gaji_pokok = 5000000;
        }

        $tunjangan = 0;
        if ($request->nama_jabatan == 'Direksi') {
            $tunjangan = 5000000;
        } else if ($request->nama_jabatan == 'Direktur Utama') {
            $tunjangan = 4500000;
        } else if ($request->nama_jabatan == 'Direktur Keuangan') {
            $tunjangan = 4000000;
        } else if ($request->nama_jabatan == 'Direktur Personalia') {
            $tunjangan = 3000000;
        } else if ($request->nama_jabatan == 'Manager') {
            $tunjangan = 2000000;
        } else if ($request->nama_jabatan == 'ADM') {
            $tunjangan = 1000000;
        } else if ($request->nama_jabatan == 'Divisi') {
            $tunjangan = 500000;
        }

        $jabatan = Jabatan::findOrFail($id);
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->gaji_pokok = $gaji_pokok;
        $jabatan->tunjangan = $tunjangan;
        $jabatan->save();
        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();
        return redirect()->route('jabatan.index');
    }
}
