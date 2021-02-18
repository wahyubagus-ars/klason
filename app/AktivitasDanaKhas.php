<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AktivitasDanaKhas extends Model
{
    protected $table = 'aktivitas_dana_khas';
    protected $guarded = [];

    public function detailAktivitasUangKas(){
        return $this->hasMany(DetailAktivitasDanaKhas::class, 'aktivitas_khas_id', 'id');
    }
}
