<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAktivitasDanaKhas extends Model
{
    protected $table = 'detail_aktivitas_dana_khas';
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];
}
