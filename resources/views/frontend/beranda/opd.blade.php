@extends('frontend.partials.app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <img src="{{asset('images/satu-data.png')}}" height="200" width="400" alt="image">
    <p>"BERMASA" <span class="typed" data-typed-items="Bermarwah, Maju, Sejahtera"></span></p></p>
    <form class="search-big-form no-border search-shadow" method="post" action="#">
			<div class="row m-0">
				<div class="col-lg-2 col-md-5 col-sm-12 p-0">
				  <div class="form-group">
				  <i class="ti-search"></i>
				    <input name="tt" type="text" class="form-control b-r" placeholder="Pencarian Data ...">
				  </div>
				</div>
		    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
			    <button type="submit" class="btn btn-primary full-width"><i class="bx bx-search"></i> Cari</button>
			  </div>
			</div>
		</form>
    <div class="social-links">
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="detail" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$dataOpd->nama}}</h2>
        <p>Data Pada {{ucfirst($dataOpd->nama)}} Kabupaten Bengkalis</p>
      </div>
      <div class="pilihtahun">
        <form action="">
          <label for="">Pilih Rentang Tahun : </label>
          <select name="tahunawal" id="">
            <option value="">--Pilih--</option>
            @foreach (array_reverse($tahun5) as $th)
            <option value="{{$th}}">{{$th}}</option>
            @endforeach
          </select>
          <select name="tahunakhir" id="">
            <option value="">--Pilih--</option>
            @foreach (array_reverse($tahun5) as $th)
            <option value="{{$th}}">{{$th}}</option>
            @endforeach
          </select>
          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
            <button type="submit" class="btn btn-primary full-width"><i class="bx bx-search"></i> Cari</button>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-lg-12 table-wrapper-scroll-x">
          {{-- <div class="w3-bar w3-black">
            <button class="w3-bar-item w3-button" onclick="openTab('tabel')">Tabel</button>
            <button class="w3-bar-item w3-button" onclick="openTab('grafik')">Grafik</button>
          </div> --}}

          {{-- <div id="tabel" class="tab"> --}}
            {{-- <h2>Menampilkan data dalam bentuk tabel</h2> --}}
            <table id="" class="table table-bordered table-hover table-striped table-responsive" style=" display: block; overflow-x: auto;">
              <thead class="bg-primary-600" style="background-color: #0a58ca; color: white;">
                  <tr>
                    <td rowspan="2" style="vertical-align : middle; text-align:center;">No</td>
                    <td rowspan="2" style="vertical-align : middle; text-align:center;">Elemen / Sub Elemen</td>
                    <td rowspan="2" style="vertical-align : middle; text-align:center;">Satuan</td>
                    <td rowspan="2" style="vertical-align : middle; text-align:center;">Produsen Data</td>
                    <td rowspan="2" style="vertical-align : middle; text-align:center;">Ketersediaan Data</td>
                    <td colspan="{{count($tahuns)}}" style="vertical-align : middle; text-align:center;">Tahun Produksi</td>
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
                      <td style="text-align: center;">{{$data->satuan??''}}</td>
                      <td>{{($data->opd->nama??'')}}</td>
                      <td style="text-align: center;">{{(count($data->data)>0)?'Ada':''}}</td>
                      @foreach($tahun as $th)
                        <td style="text-align: center;">{{$elemen->filterjumlah($data->id??'',$th)->jumlah??''}}</td>
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
          {{-- </div> --}}
          
          {{-- <div id="grafik" class="tab" style="display:none">
            <h2>Menampilkan data dalam bentuk grafik</h2> --}}
          </div>
          
        </div>
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
  </section><!-- End About Section -->

</main><!-- End #main -->
@endsection

<script>
  function openTab(tabName) {
    var i;
    var x = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    document.getElementById(tabName).style.display = "block";  
  }
  </script>

@push('css')
{{-- <link rel="stylesheet" media="screen, print" href="{{url('backend/css/vendors.bundle.css')}}">
    <link rel="stylesheet" media="screen, print" href="{{url('backend/css/app.bundle.css')}}"> --}}
    <link rel="stylesheet" media="screen, print" href="{{url('resources/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" type="text/css" />
@endpush
@push('js')
<script src="{{url('frontend/js/jquery.js')}}"></script>
<script src="{{url('frontend/js/plugins.min.js')}}"></script>
<script src="{{url('frontend/js/functions.js')}}"></script>
<script>
  $('#datatable').DataTable( {
    } );
</script>
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
      url: "{{url('chart')}}/"+id,
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
              responsive: true
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
