<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable implements JWTSubject
{
    public $timestamps = false;
    protected $table = 'account';
    protected $fillable = [
        'email', 'password', 'role_id'
    ];
    protected $hidden = [
        'password'
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
    public function informasi_user(){
        return $this->hasOne(ProfileSiswa::class, 'account_id', 'id');
    }
    public function scopeInformasiUser($q, $id){
        return $q->where('account.id', '=', $id)
                ->join('profile_siswa', 'account.id', '=', 'profile_siswa.account_id')
                ->select('account.*', 'profile_siswa.name');
    }
}
