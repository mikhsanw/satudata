@extends('backend.home.index')
@push('title',ucwords(strtolower($halaman->nama)))
@push('header',ucwords(strtolower($halaman->nama)))
@section('content')
<div class="container">
	<form method="get" action="{{url('laporan/opd')}}">
		<div class="row">
			<div class="col-8">
				 Perangkat Daerah :
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
						<td>
							@if(count($data->data)>0)
								<a href="#modalChart" data-lightbox="inline" class="button button-large button-rounded modalChart" title="{{$data->nama??''}}" id="{{$data->id}}"><i class="fa fa-bar-chart" style="font-size:25px;color:red"></i></a>
							@endif
						</td>
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

<!-- modalChart -->
<div class="modal1 mfp-hide" id="modalChart">
      <div class="block mx-auto" style="background-color: #FFF; max-width: 800px;">
        <div class="center" style="padding: 50px;">
          <h3 class="title">Grafik Data Per Tahun</h3>
          <div class="bottommargin mx-auto" style="max-width: 100%; min-height: 350px;">
				<canvas id="chart-0"></canvas>
			</div>
        </div>
        <div class="section center m-0" style="padding: 30px;">
          <a href="#" class="btn btn-primary" onClick="$.magnificPopup.close();return false;">Close</a>
        </div>
      </div>
    </div>
@endsection
@push('js')
@include('backend.home.datatable-js')
<script type="text/javascript" src="{{ URL::asset(config('master.aplikasi.author').'/home/'.$halaman->link.'/'.$halaman->kode.'/jquery-crud.js') }}"></script>
<script src="{{ URL::asset(config('master.aplikasi.author').'/laporan/ajax.js') }}"></script>
<script src="{{url('frontend/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('backend/js/formplugins/select2/select2.bundle.js') }}"></script>
<script src="{{url('frontend/js/plugins.min.js')}}"></script>
<script src="{{url('frontend/js/functions.js')}}"></script>
<script src="{{url('frontend/js/chart.js')}}"></script>
<script src="{{url('frontend/js/chart-utils.js')}}"></script>
<script>
  $(document).on("click",".modalChart",function() {
		var label = ['2010','2021','2010','2021','2010'];
    var id = $(this).attr('id');
    var title = $(this).attr('title');
    console.log(title);
    $('.title').html(title);
    $.ajax({
      type: "GET",
      url: "{{url('laporan/chart')}}/"+id,
      cache: true,
      success: function (data) {
          console.log(data);
          var ctx = document.getElementById("chart-0").getContext("2d");
          window.myPie = new Chart(ctx, {
            type: 'bar',
            data: {
              datasets: [{
                data: data.jumlah,
                backgroundColor: [
                  window.chartColors.red,
                  window.chartColors.orange,
                  window.chartColors.yellow,
                  window.chartColors.green,
                  window.chartColors.blue,
                ],
                label: data.tahun
              }],
              labels: data.tahun
            },
            options: {
				responsive: true,
				scales: {
					yAxes: [{
					ticks: {
						beginAtZero: true
					}
					}]
				}
            }
          });
      },
      error: function(err) {
          console.log(err);
      }
    });  
    
  });

</script>
@endpush
@push('css')
<link rel="stylesheet" media="screen, print" href="{{ URL::asset('backend/css/formplugins/select2/select2.bundle.css') }}">
	<link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}" type="text/css" />
@include('backend.home.datatable-css')
@endpush
