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
        <h2>SATU DATA KABUPATEN BENGKALIS</h2>
        <p>Merupakan Aplikasi Resmi Yang Menyediakan Data-data Dari Perangkat Daerah Di Lingkungan Pemerintah Kabupaten Bengkalis Yang Akurat dan Akuntabel, Serta Memberikan Kemudahan dan Kebutuhan Akses Data Untuk Masyarakat dan Instansi Pemerintahan Dengan Berkualitas dan Terbuka.</p>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <img src="{{asset('images/satu-data.png')}}" height="200" width="400" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3>Tentang Satu Data</h3>
          <p class="text-justify">
          Merupakan salah satu aplikasi yang dibangun oleh Dinas Komunikasi, Informatika dan Statistik Kabupaten Bengkalis. Dibuat dengan tujuan sebagai media untuk penyajian data informasi spesifik dari Data Sektoral dan Data Spasial. 
          Aplikasi ini dikelola oleh bidang Statistik yang ada di Dinas Komunikasi, Informatika dan Statistik Kabupaten Bengkalis yang bekerjasama dengan Organisasi Perangkat Daerah (OPD) lingkup Pemerintah Kabupaten Bengkalis. 
          Diharapkan dengan adanya aplikasi Satu Data ini, bisa membantu masyarakat/akademisi/pengusaha/instansi pemerintahan dalam mendapatkan data yang valid serta up to date.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

</main><!-- End #main -->
@endsection
