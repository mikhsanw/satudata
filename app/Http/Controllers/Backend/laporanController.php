<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Elemen;
use App\Model\Opd;
use Illuminate\Support\Facades\Auth;

class laporanController extends Controller
{
    public function index()
    {
        $opds = Opd::all();

        if(Auth::user()->aksesgrup_id == 2){
            $datas = Elemen::whereOpdId(Auth::user()->opd_id)->whereNull('parent_id')->get();
        }else{
            $datas = Elemen::whereNull('parent_id')->get();
        }
        $tahuns = config('master.tahunlaporan');
        $elemen = new Elemen;
        return view('backend.laporan.index',['opds'=>$opds,'datas'=>$datas,'tahuns'=>$tahuns,'elemen'=>$elemen]);
    }
    public function opd(Request $request)
    {
        $opds = Opd::all();
        $datas = Elemen::whereOpdId($request->opd)->whereNull('parent_id')->get();
        $tahuns = config('master.tahunlaporan');
        $elemen = new Elemen;
        return view('backend.laporan.index',['opds'=>$opds,'datas'=>$datas,'tahuns'=>$tahuns,'elemen'=>$elemen]);
    }
}
