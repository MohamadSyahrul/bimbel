<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profileUser() {
        return $this->hasOne('App\ProfileUser', 'id_user');
    }

    public function profileOrtu() {
        return $this->hasOne('App\ProfileOrtu', 'user_id');
    }

    public function transaksi() {
        return $this->hasMany(Transaksi::class, 'user_id');
    }

    public function kelas() {
        return $this->belongsToMany(Kelas::class, 'transaksis');
    }

    public function absensi() {
        return $this->belongsToMany(Absensi::class, 'absensi_users');
    }

    public function absensi_user() {
        return $this->belongsToMany(AbsensiUser::class, 'user_id');
    }
}
