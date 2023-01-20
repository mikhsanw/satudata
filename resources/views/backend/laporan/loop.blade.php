@php $tes=$tes.('.'.$key+1); @endphp
<tr>
    <td style="text-align: center;">{{$i.$tes}} </td>
    <td>{{$item->nama}}</td>
    <td>{{$item->satuan??''}}</td>
    <td>{{($data->opd->nama??'')}}</td>
    <td style="text-align: center;">{{(count($item->data)>0)?'Ada':''}}</td>
    @foreach($tahun as $th)
        <td style="text-align: center;">{{$elemen->filterjumlah($item->id??'',$th)->jumlah??''}}</td>
    @endforeach
    <td>{{$item->keterangan??''}}</td>
</tr>
@foreach($item->children as $key => $item)
    @include('backend.laporan.loop')
@endforeach