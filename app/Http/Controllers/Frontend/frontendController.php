<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\foto;
use App\Model\Opd;
use App\Model\Elemen;
use App\Model\Dokumen;
use App\Model\Data;
use App\Exports\PencarianExport;
use Maatwebsite\Excel\Facades\Excel;
class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = array(
            'slider' => foto::where('status',config('master.status_foto.slider'))->orderBy('id','desc')->take(5)->get(),
            'opd' => Opd::get(),
            'buku' => Dokumen::get(),
        );
        return view('frontend.beranda.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function opdDetail($id){
        $tahun5 = array(date("Y"),date("Y")-1,date("Y")-2,date("Y")-3,date("Y")-4);

        if (!isset($_GET['tahunawal'], $_GET['tahunakhir'])) {
            $tahuns = array(date("Y"),date("Y")-1,date("Y")-2,date("Y")-3,date("Y")-4);
            }else{
            for ($i = $_GET['tahunawal']; $i <= $_GET['tahunakhir']; $i++){
                $tahuns[]=$i;
            }
        }
        $datas = Elemen::whereOpdId($id)->whereNull('parent_id')->get();
        $elemen = new Elemen;
        $dataOpd = Opd::findOrFail($id);
        return view('frontend.beranda.opd', compact('dataOpd','tahuns', 'elemen','datas', 'tahun5'));
    }

    public function cari(Request $request){
        $cari = $request->keyword;
        $data = [
            'count'=>Elemen::where('nama' ,'LIKE','%'.$cari.'%')->count(),
            'elemen'=>Elemen::whereNull('parent_id')->where('nama' ,'LIKE','%'.$cari.'%')->get(),
            'subelemen'=>Elemen::whereNotNull('parent_id')->where('nama' ,'LIKE','%'.$cari.'%')->get(),
            'keyword'=>$cari
        ];
        return view('frontend.beranda.cari.index', $data);
    }

    public function caridetail($id){
        $elemen = Elemen::find($id);

        $data = [
            'datas'=> $elemen,
            'tahuns' => array(date("Y"),date("Y")-1,date("Y")-2,date("Y")-3,date("Y")-4),
            'elemen' => new Elemen
        ];
        return view('frontend.beranda.cari.cari-detail', $data);
    }

    public function export($id) 
    {
        return Excel::download(new PencarianExport($id), $id.'.xlsx');
    }
    public function chart($id) 
    {
        $query=Data::whereElemenId($id)->orderBy('tahun','desc')->get();
        $jumlah=array();
        $tahun=array();
        foreach($query as $qr){
            $jumlah[]=$qr->jumlah;
            $tahun[]=$qr->tahun;
        }
        $data = [
            'jumlah' => $jumlah,
            'tahun' => $tahun
        ];
        return $data;
    }

}
