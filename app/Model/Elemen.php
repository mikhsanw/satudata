<?php

namespace App\Model;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Elemen extends Model
{
    use HasFactory, SoftDeletes, Uuid;

    protected $casts=[
        'id'=>'string',
    ];
    protected $fillable=[
        'id', 'nama', 'satuan', 'keterangan','status','parent_id','opd_id','wilayah_id'
    ];

    public function data()
    {
        return $this->hasMany('App\Model\Data');
    }

    public function parent()
    {
        return $this->belongsTo('App\Model\Elemen','parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Model\Elemen','parent_id','id');
    }

    public function opd()
	{
        return $this->belongsTo('App\Model\Opd');
	}

    public function wilayah()
	{
        return $this->belongsTo('App\Model\Wilayah');
	}

    public function filterjumlah($id,$th)
    {
        return $this->join('data','data.elemen_id','elemens.id')->select('jumlah')->where('elemens.id',$id)->where('data.tahun',$th)->whereNull('data.deleted_at')->first();
    }

    public function getParentNama($nama,$id)
    {
        $qr = $this->find($id);
        $namanew = '<a href="'.url('elemen/'.$qr->id).'" class="text-dark">'.\Help::shortDescription($qr->nama,3).'</a>'.' / '.$nama;
        // dd($qr->parent->id);
        if($qr->parent){
            return $this->getParentNama($namanew,$qr->parent->id);
        }
        return $namanew;
    }
}
