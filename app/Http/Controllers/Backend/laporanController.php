<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Elemen;
use Illuminate\Support\Facades\Auth;

class laporanController extends Controller
{
    public function index()
    {
        $datas = Elemen::whereOpdId(Auth::user()->opd_id)->whereNull('parent_id')->get();
        $tahuns = Elemen::whereOpdId(Auth::user()->opd_id)->whereStatus('2')->first();
        $elemen = new Elemen;
        return view('backend.laporan.index',['datas'=>$datas,'tahuns'=>$tahuns,'elemen'=>$elemen]);
    }

}
