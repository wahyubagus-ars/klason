<?php

namespace App\Http\Controllers;

use App\AktivitasDanaKhas;
use App\DetailAktivitasDanaKhas;
use App\Http\Requests\AktivitasRequest;
use App\Libraries\Response;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UangKasController extends Controller
{
    public function index(){
        $data = AktivitasDanaKhas::with('detailAktivitasUangKas')->get();
        return Response::success('get_data_success', 200, $data);
    }
    public function store_aktivitas_pengeluaran(AktivitasRequest $request){
        $store = null;
        $data = null;
        $total = null;
        DB::transaction(function () use ($request, &$data, $total, &$store){
            $store['aktivitas'] = AktivitasDanaKhas::create([
                'judul_aktivitas' => $request->judul_aktivitas,
                'bendahara_id' => auth()->user()->id,
            ]);
            foreach ($request->name as $key => $value) {
                $total += ($request->jumlah[$key] * $request->harga[$key]);
                $data = array(
                    'aktivitas_khas_id' => $store['aktivitas']->id,
                    'name' => $request->name[$key],
                    'jumlah' => $request->jumlah[$key],
                    'harga' => $request->harga[$key],
                    'total' => (int)$request->harga[$key] * (int)$request->jumlah[$key],
                    'dibuat' => Carbon::now()->toDateString()
                );
                $store['detail_aktivitas_kas'][$key] = DetailAktivitasDanaKhas::create($data);
            }
            AktivitasDanaKhas::where('id', $store['aktivitas']->id)->update(['total' => $total]);
        });

        return Response::success('store_data_success', 201, $store);
    }
}
