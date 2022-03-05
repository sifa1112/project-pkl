<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $visible = ['nama_jabatan', 'gaji_pokok', 'tunjangan'];
    protected $fillable = ['nama_jabatan', 'gaji_pokok', 'tunjangan'];
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
    public function gaji()
    {
        //data model "gaji" bisa memiliki banyak data
        //data model "jabatan" melalui fk "jabatan_id"
        return $this->hasMany('App\Models\Gaji', 'jabatan_id');
    }
}
