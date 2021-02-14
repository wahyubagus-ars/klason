<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileSiswa extends Model
{
    public $timestamps = false;
    protected $table = 'profile_siswa';
    protected $fillable = [
        'name', 'nip', 'no_absen', 'jabatan_id', 'avatar', 'gender', 'no_hp', 'no_hp_wali'
    ];
}
