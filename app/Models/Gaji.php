<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;
    protected $visible = ['karyawan_id', 'jabatan_id', 'potongan', 'total'];

    public function karyawan()
    {
        //model karyawan bisa memiliki 1 data dari model gaji
        //melalui fk 'karyawan_id'
        return $this->belongsTo('App\Models\Karyawan', 'karyawan_id');
    }
    public function jabatan()
    {
        //model jabatan bisa memiliki 1 data dari model gaji
        //melalui fk 'jabatan_id'
        return $this->belongsTo('App\Models\Jabatan', 'jabatan_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
