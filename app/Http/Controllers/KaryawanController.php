<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::with('jabatan', 'user')->get();
        return view('admin.karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengambil data jabatan
        $jabatan = Jabatan::all();
        $user = User::all();
        return view('admin.karyawan.create', compact('jabatan', 'user'));
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
            'ttl' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'jabatan_id' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt("12345678");
        $user->save();

        $karyawan = new Karyawan;
        $karyawan->user_id = $user->id;
        $karyawan->ttl = $request->ttl;
        $karyawan->jk = $request->jk;
        $karyawan->agama = $request->agama;
        $karyawan->alamat = $request->alamat;
        $karyawan->no_tlp = $request->no_tlp;
        $karyawan->jabatan_id = $request->jabatan_id;
        $karyawan->save();
        // Session::flash("flash_notification", [
        //     "level" => "success",
        //     "message" => "Berhasil Menyimpan  $karyawan->nama_karyawan",
        // ]);

        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('admin.karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $jabatan = Jabatan::all();
        $user = User::all();
        return view('admin.karyawan.edit', compact('karyawan', 'jabatan', 'user'));
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
        // $request->validate([
        //     'user_id' => 'required',
        //     'ttl' => 'required',
        //     'jk' => 'required',
        //     'agama' => 'required',
        //     'alamat' => 'required',
        //     'no_tlp' => 'required',
        //     'jabatan_id' => 'required',
        // ]);

        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt("12345678");
        $user->save();

        $karyawan = Karyawan::findOrFail($id);
        $karyawan->user_id = $user->id;
        $karyawan->ttl = $request->ttl;
        $karyawan->jk = $request->jk;
        $karyawan->agama = $request->agama;
        $karyawan->alamat = $request->alamat;
        $karyawan->no_tlp = $request->no_tlp;
        $karyawan->jabatan_id = $request->jabatan_id;
        $karyawan->save();
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()->route('karyawan.index');

    }
}
