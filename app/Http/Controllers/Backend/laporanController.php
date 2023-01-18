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
        $tahuns = array(date("Y"),date("Y")-1,date("Y")-2,date("Y")-3,date("Y")-4);
        $elemen = new Elemen;
        return view('backend.laporan.index',['datas'=>$datas,'tahuns'=>$tahuns,'elemen'=>$elemen]);
    }

}
