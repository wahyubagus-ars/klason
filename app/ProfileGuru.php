<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileGuru extends Model
{
    public $timestamps = false;
    protected $table = 'profile_guru';
    protected $fillable = [
        'account_id', 'name', 'nisn', 'avatar', 'gender', 'no_hp', 'jabatan_id'
    ];
}
