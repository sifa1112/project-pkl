<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $visible = ['nama', 'ttl', 'jk', 'agama', 'no_tlp', 'jabatan_id'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable = ['nama', 'ttl', 'jk', 'agama', 'alamat', 'no_hp', 'jabatan_id'];

    public function jabatan()
    {
        // data model Mahasiswa dimiliki oleh model jabatan melalui fk 'jabatan_id'
        return $this->belongsTo('App\Models\Jabatan', 'jabatan_id');
    }

    public function gaji()
    {
        // model karyawan bisa memiliki 1 data dari model gaji
        // melalui fk 'id_karyawan'
        return $this->hasOne('App\Models\Gaji', 'id_karyawan');
    }
}
