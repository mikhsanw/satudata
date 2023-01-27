@extends('backend.home.index')
@push('title',ucwords(strtolower($halaman->nama)))
@push('header',ucwords(strtolower($halaman->nama)))
@section('content')
<div class="container">
	<form method="get" action="{{url('laporan/opd')}}">
		<div class="row">
			<div class="col-12">
				&nbsp; &nbsp; &nbsp; Perangkat Daerah :
				<select onchange="this.form.submit()" style="width: 97% ; height:40px" class="select2" name="opd" id="select2">
					<option value="0" selected>- pilih -</option>
					@foreach($opds as $data)
					<option value="{{ $data->id }}">{{$data->nama}}</option>
					@endforeach
				</select>		
			</div>
		</div>
	</form>
</div>
<div class="panel-container show">
	<div class="panel-content">
		<table id="" class="table table-bordered table-hover table-striped table-responsive">
		<thead class="bg-primary-600">
				<tr>
					<td rowspan="2" style="vertical-align : middle;text-align:center;">No</td>
					<td rowspan="2" style="vertical-align : middle;text-align:center;">Elemen / Sub Elemen</td>
					<td rowspan="2" style="vertical-align : middle;text-align:center;">Satuan</td>
					<td rowspan="2" style="vertical-align : middle;text-align:center;">Produsen Data</td>
					<td rowspan="2" style="vertical-align : middle;text-align:center;">Ketersediaan Data</td>
					<td colspan="{{count($tahuns)}}" style="vertical-align : middle;text-align:center;">Tahun Produksi</td>
					<td rowspan="2" style="vertical-align : middle;text-align:center;">Catatan</td>
					<td rowspan="2" style="vertical-align : middle;text-align:center;">Grafik</td>
				</tr>
				<tr>
					@foreach($tahuns as $th)
					<td style="vertical-align : middle;text-align:center;">{{$tahun[]=$th}}</td>
					@endforeach
				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach($datas as $data)
					<tr>
						<td style="font-weight: bold; text-align: center;">{{$i}}</td>
						<td style="font-weight: bold;">{{$data->nama??''}}</td>
						<td>{{$data->satuan??''}}</td>
						<td>{{($data->opd->nama??'')}}</td>
						<td>{{(count($data->data)>0)?'Ada':''}}</td>
						@foreach($tahun as $th)
							<td>{{$elemen->filterjumlah($data->id??'',$th)->jumlah??''}}</td>
						@endforeach
						<td>{{$data->keterangan??''}}</td>
					</tr>
					@php $tes=''; @endphp
					@foreach($data->children as $key => $item)
						@include('backend.laporan.loop')
					@endforeach
					@php $i++; @endphp
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
@push('js')
@include('backend.home.datatable-js')
<script type="text/javascript" src="{{ URL::asset(config('master.aplikasi.author').'/home/'.$halaman->link.'/'.$halaman->kode.'/jquery-crud.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset(config('master.aplikasi.author').'/'.$halaman->kode.'/datatables.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('backend/js/formplugins/select2/select2.bundle.js') }}"></script>
<script src="{{ URL::asset(config('master.aplikasi.author').'/laporan/ajax.js') }}"></script>
@endpush
@push('css')
<link rel="stylesheet" media="screen, print" href="{{ asset('backend/css/formplugins/summernote/summernote.css') }}">
<link rel="stylesheet" media="screen, print" href="{{ URL::asset('backend/css/formplugins/select2/select2.bundle.css') }}">
@include('backend.home.datatable-css')
@endpush
