<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;

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
        return response()->json([
            'success' => true,
            'message' => 'Data Jabatan',
            'data' => $jabatan,
        ], 200);
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
    public function store(Request $request)
    {
        $jabatan = new Jabatan();
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->gaji_pokok = $request->gaji_pokok;
        $jabatan->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Jabatan berhasil dibuat',
            'data' => $jabatan,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Show Data Jabatan',
            'data' => $jabatan,
        ], 200);
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
        $jabatan = new Jabatan();
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->gaji_pokok = $request->gaji_pokok;
        $jabatan->save();
        return responses()->json([
            'success' => true,
            'message' => 'Data Jabatan berhasil diedit',
            'data' => $jabatan,
        ], 201);
    }

    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Jabatan Berhasil dihapus',
            'data' => $jabatan,
        ], 200);
    }
}
