<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsensiUser extends Model
{
    //
    protected $guarded = ['id'];

    public function absensi() {
        return $this->belongsTo(Absensi::class, 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id');
    }
}
