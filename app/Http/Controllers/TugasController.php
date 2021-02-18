<?php

namespace App\Http\Controllers;

use App\Libraries\Response;
use App\Tugas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index(){
        $data['week'] = Tugas::InformasiTugas()->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->orderBy('deadline', 'DESC')
            ->take(3)->get();
        $data['month'] = Tugas::InformasiTugas()->whereBetween('created_at',[Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
            ->orderBy('deadline', 'DESC')
            ->take(3)->get();

        return Response::success('get_data_success', 200, $data);
    }
}
