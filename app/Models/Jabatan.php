<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $visible = ['nama_jabatan', 'gaji_pokok'];
    protected $fillable = ['nama_jabatan', 'gaji_pokok'];
    public $timestamp = true;

    /*
     * Relasi One-to-Many
     * ==================
     * Buat function bernama karyawan(), dimana model 'jabatan' akan memiliki
     * relasi One-to-Many terhadap model 'karyawan' melalui 'id_jabatan'
     */
    public function karyawan()
    {
        return $this->hasMany('App\Models\Karyawan', 'id_jabatan');
    }
}
