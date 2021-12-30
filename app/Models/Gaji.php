<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;
    protected $fillable = ['gaji_pokok','tunjangan','karyawan_id','jabatan_id'];

    public function karyawan()
    {
        //model karyawan bisa memiliki 1 data dari model wali
        //melalui fk 'karyawan_id'
        return $this->belongsTo('App\Models\Karyawan','karyawan_id');
}
    public function jabatan()
    {
        //model jabatan bisa memiliki 1 data dari model wali
        //melalui fk 'jabatan_id'
        return $this->belongsTo('App\Models\Jabatan','jabatan_id');
}
}
