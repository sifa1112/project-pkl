<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('users')->where('role', 'karyawan')->get();
        return view('layouts.admin.index', compact('karyawan'));
    }

    public function role()
    {
        $role = Auth::user()->role;

        if ($role == 'admin') {
            return view('layouts.admin.dashboard',
                [
                    'karyawan' => User::where('role', 'karyawan')->count(),
                    'jabatan' => jabatan::all()->count(),
                ]);
        } else {
            return view('layouts.user.dashboard',
                [

                ]);
        }
    }

    public function dashboard()
    {
        $karyawan = DB::table('users')->where('role', 'karyawan')->count();
        $jabatan = DB::table('jabatans')->count();
        // $pendapatan = DB::table('#')->count();
        // $pengguna = DB::table('penggunas')->count();
        // dd($pegawai, $kegiatan, $uraian, $pengguna);
        return view('layouts.admin.dashboard', compact('karyawan', 'jabatan'));
    }

    public function dashboardkaryawan()
    {
        return view('layouts.user.dashboard');
    }

    public function laporan()
    {
        $karyawan = Karyawan::with('users')->get();
        $gaji = Gaji::all();
        return view('layouts.admin.laporan', compact('karyawan', 'gaji'));
    }

}
