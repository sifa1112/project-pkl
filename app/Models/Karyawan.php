<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'ttl', 'jk', 'agama', 'no_tlp', 'id_jabatan'];

    public function jabatan()
    {
        // data model Mahasiswa dimiliki oleh model jabatan melalui fk 'id_jabatan'
        return $this->belongsTo('App\Models\Jabatan', 'id_jabatan');
    }

    public function gaji()
    {
        // model karyawan bisa memiliki 1 data dari model gaji
        // melalui fk 'id_karyawan'
        return $this->hasOne('App\Models\Gaji', 'id_karyawan');
    }
}
