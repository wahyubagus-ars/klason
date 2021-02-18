<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = 'tugas';
    protected $fillable = ['title', 'mapel_id', 'deskripsi', 'deadline', 'created_at', 'updated_at'];
    protected $hidden = ['updated_at'];

    public function scopeInformasiTugas($q){
        return $q->join('mapel', 'mapel_id', '=','mapel.id')
                ->join('profile_guru', 'pengajar_id', '=', 'profile_guru.id')
                ->select('tugas.*', 'mapel.id as mapel_id', 'mapel.mapel', 'profile_guru.id as guru_id', 'profile_guru.name');
    }
    
}
