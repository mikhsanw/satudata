@extends('backend.home.index')
@push('title',ucwords(strtolower($halaman->nama)))
@push('header',ucwords(strtolower($halaman->nama)))
@push('tombol')
<div class="panel-toolbar">
<a class="btn btn-sm btn-success waves-effect waves-themed kelengkapan" data-toggle="tooltip" data-placement="top" title="Tambah" data-id="{{$id}}" href="#kelengkapan-{{$id}}">
@if($status!=1) Ubah @endif Kelengkapan Elemen <i class="fas fa-edit"></i>
</a>
</div>&nbsp;&nbsp;
@if($status!=1)
<div class="panel-toolbar">
	<a href="#tambah" class="btn btn-sm btn-primary waves-effect waves-themed tambah">
		Tambah  <i class="fa fa-plus-circle"></i>
	</a>
</div>
@endif

@endpush
@section('content')
<div class="panel-container show">
	<div class="panel-content">
		<table id="datatable" class="table table-bordered table-hover table-striped w-100">
			<thead class="bg-primary-600">
				<tr>
					<th class="width-1">No</th>
					<th class="text-center">Jumlah</th>
					<th class="text-center">Tahun</th>
					<th width="50px" class="text-center" tabindex="0" rowspan="1" colspan="1">Aksi</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
@endsection
@push('js')
@include('backend.home.datatable-js')
<!-- <script type="text/javascript" src="{{ URL::asset(config('master.aplikasi.author').'/home/'.$halaman->link.'/'.$halaman->kode.'/jquery-crud.js') }}"></script> -->
<script type="text/javascript" src="{{ URL::asset(config('master.aplikasi.author').'/'.$halaman->kode.'/'.$id.'/datatables.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset(config('master.aplikasi.author').'/'.$halaman->kode.'/'.$id.'/jquery.js') }}"></script>
@endpush
@push('css')
<link rel="stylesheet" media="screen, print" href="{{ asset('backend/css/formplugins/summernote/summernote.css') }}">
@include('backend.home.datatable-css')
@endpush
