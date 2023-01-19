@extends('frontend.partials.app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <img src="{{asset('images/satu-data.png')}}" height="200" width="400" alt="image">
    <p>"BERMASA" <span class="typed" data-typed-items="Bermarwah, Maju, Sejahtera"></span></p></p>
    
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
        <h2>{{$datas->opd->nama}}</h2>
        <h5>{{$datas->nama}}</h5>
      </div>

      <div class="row pb-5">
        <div class="col-lg-12 pt-4 pt-lg-0 pb-2 text-right"> <button id="export" class="btn btn-primary">Export</button> </div>
        <div class="col-lg-12 pt-4 pt-lg-0 pb-2">
        <table id="datatable" class="table table-bordered table-hover table-striped table-responsive">
          <thead class="bg-primary-600">
            <tr>
              <td rowspan="2" style="vertical-align : middle;text-align:center;">No</td>
              <td rowspan="2" style="vertical-align : middle;text-align:center;">Elemen / Sub Elemen</td>
              <td rowspan="2" style="vertical-align : middle;text-align:center;">Satuan</td>
              <td rowspan="2" style="vertical-align : middle;text-align:center;">Produsen Data</td>
              <td rowspan="2" style="vertical-align : middle;text-align:center;">Ketersediaan Data</td>
              <td colspan="{{count($tahuns)}}" style="vertical-align : middle;text-align:center;">Tahun Produksi</td>
              <td rowspan="2" style="vertical-align : middle;text-align:center;">Catatan</td>
            </tr>
            <tr>
              @foreach($tahuns as $th)
              <td style="vertical-align : middle;text-align:center;">{{$tahun[]=$th}}</td>
              @endforeach
            </tr>
          </thead>
          <tbody>
              <tr>
                <td style="font-weight: bold; text-align: center;">1</td>
                <td style="font-weight: bold;">{{$datas->nama??''}}</td>
                <td>{{$datas->satuan??''}}</td>
                <td>{{($datas->opd->nama??'')}}</td>
                <td>{{(count($datas->data)>0)?'Ada':''}}</td>
                @foreach($tahun as $th)
                  <td>{{$elemen->filterjumlah($datas->id??'',$th)->jumlah??''}}</td>
                @endforeach
                <td>{{$datas->keterangan??''}}</td>
              </tr>
              @php $tes=''; @endphp
              @foreach($datas->children as $key => $item)
                @include('frontend.beranda.cari.loop')
              @endforeach
          </tbody>
        </table>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

</main><!-- End #main -->
@endsection
@push('css')
<link rel="stylesheet" media="screen, print" href="{{ asset('backend/css/datagrid/datatables/datatables.bundle.css') }}">

@endpush
@push('js')
<script src="{{ asset('backend/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('backend/js/datagrid/datatables/datatables.export.js') }}"></script>
$(document).ready( function () {
    $('#datatable').DataTable();
} );

$(function() {
        $("#export").click(function(e){
          var table = $("#datatable");
          if(table && table.length){
            $(table).table2excel({
              exclude: ".noExl",
              name: "tes",
              filename: "BBBootstrap" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
              fileext: ".xls",
              exclude_img: true,
              exclude_links: true,
              exclude_inputs: true,
              preserveColors: false
            });
          }
        });
        
      });
@endpush