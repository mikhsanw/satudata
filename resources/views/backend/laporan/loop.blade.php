@php $tes=$tes.('.'.$key + 1); @endphp
<tr>
    <td style="text-align: left;">{{$i.$tes}} </td>
    <td>{{$item->nama}}</td>
    <td>{{$item->satuan??''}}</td>
    <td>{{($data->opd->nama??'')}}</td>
    <td style="text-align: center;">{{(count($item->data)>0)?'Ada':''}}</td>
    @foreach($tahun as $th)
        <td style="text-align: center;">{{($elemen->filterjumlah($item->id??'',$th))?(Help::desimal($elemen->filterjumlah($item->id??'',$th)->jumlah)):''}}</td>
    @endforeach
    <td>{{$item->keterangan??''}}</td>
    <td>
        @if(count($item->data)>0)
            <a href="#modalChart" data-lightbox="inline" class="button button-large button-rounded modalChart" title="{{$item->nama??''}}" id="{{$item->id}}"><i class="fa fa-bar-chart" style="font-size:25px;color:red"></i></a>
        @endif
    </td>
</tr>
@foreach($item->children as $key => $item)
    @include('backend.laporan.loop')
@endforeach