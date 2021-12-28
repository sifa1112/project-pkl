<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $fillable = ['id_karyawan','tanggal','status_absen'];

    public function karyawan()
    {
        //model karyawan bisa memiliki 1 data dari model wali
        //melalui fk 'id_karyawan'
        return $this->belongsTo('App\Models\Karyawan','id_karyawan');
}
}