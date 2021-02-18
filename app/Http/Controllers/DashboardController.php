<?php

namespace App\Http\Controllers;

use App\Account;
use App\AktivitasDanaKhas;
use App\Libraries\Response;
use App\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $data['jadwal'] = DB::table('jadwal')->get();
        $data['khas'] = DB::table('pekan_khas')->latest()->first();
        $data['user'] = Account::with('informasi_user')->where('id', auth()->user()->id)->first();
        $data['tugas_terbaru'] = Tugas::InformasiTugas()->orderBy('created_at', 'DESC')->take(2)->get();
        $data['tugas_by_deadline'] = Tugas::InformasiTugas()->orderBy('deadline', 'DESC')->take(4)->get();
        
        return Response::success('get_data_success', 200, $data);
    }
}
