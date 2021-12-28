<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;
    protected $fillable = ['gaji_pokok','tunjangan','id_karyawan','id_jabatan'];

    public function karyawan()
    {
        //model karyawan bisa memiliki 1 data dari model wali
        //melalui fk 'id_karyawan'
        return $this->belongsTo('App\Models\Karyawan','id_karyawan');
}
    public function jabatan()
    {
        //model jabatan bisa memiliki 1 data dari model wali
        //melalui fk 'id_jabatan'
        return $this->belongsTo('App\Models\Jabatan','id_jabatan');
}
}
