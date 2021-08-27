<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    protected $guarded = ['id'];


    public function user() {
        return $this->belongsToMany(User::class, 'transaksis');
    }

    public function transaksi() {
        return $this->hasMany(Transaksi::class, 'kelas_id');
    }

    public function absensi() {
        return $this->hasMany(Absensi::class, 'id_kelas');
    }
}