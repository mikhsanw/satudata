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
  <section id="about" class="about">
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

  <!-- ======= Facts Section ======= -->
  <section id="facts" class="facts">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>STATISTIK DATA</h2>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="66" data-purecounter-duration="1" class="purecounter"></span>
            <p>Semua Data</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
            <p>Data Sektor</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="53" data-purecounter-duration="1" class="purecounter"></span>
            <p>Data SKPD</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
            <p>Semua Kecamatan</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Facts Section -->

  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Persentasi Keterisian Data</h2>
        <p>Satu Data menyajikan berupa perbandingan volume dari komponen data per 5 tahun belakang, berikut persentasi keterisian data 5 tahun terakhir</p>
        <p>(dari Total Data Per Tahun: - data) :</p>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">2017 - 1300 DATA<i class="val">(87%)</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">2018 - 1420 DATA<i class="val">(89%)</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">2019 - 1530 DATA<i class="val">(91%)</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">2020 - 1580 DATA<i class="val">(93%)</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">2021 - 1810 DATA<i class="val">97%)</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">2022 - 1980 DATA<i class="val">(99%)</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Skills Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>JENIS DATA</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="resume-item pb-0">
            <h4>Data Statistik Dasar</h4>
            <p><em>Statistik yang pemanfaatannya ditujukan untuk keperluan yang bersifat luas, baik pemerintah maupun masyarakat, yang memiliki ciri-ciri lintas sektoral, berskala nasional maupun regional, makro, dan yang penyelenggaraannya menjadi tanggung jawab BPS.</em></p>
          </div>
          <div class="resume-item">
            <h4>Data Statistik Sektoral</h4>
            <p><em>Statistik yang pemanfaatannya ditujukan untuk memenuhi kebutuhan instansi pemerintah tertentu dalam rangka penyelenggaraan tugas-tugas pemerintah dan tugas pembangunan yag merupakan tugas pokok instansi pemerintah yang bersangkutan.</em></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="resume-item">
            <h4>Data Potensi Desa</h4>
            <p><em>potensi desa adalah kemampuan, kekuatan atau sumber daya (fisik dan non fisik) yang dimiliki oleh suatu daerah namun belum sepenuhnya terlihat atau dipergunakan secara maksimal</em></p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>PUBLIKASI</h2>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('images/buku1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bengkalis Dalam Angka</h4>
              <p>Tahun 2014</p>
              <div class="portfolio-links">
                <a href="{{asset('images/buku1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bengkalis Dalam Angka"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('images/buku2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bengkalis Dalam Angka</h4>
              <p>Tahun 2015</p>
              <div class="portfolio-links">
                <a href="{{asset('images/buku2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bengkalis Dalam Angka"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('images/buku3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Data Statistik Sektoral</h4>
              <p>Tahun 2015 - 2018</p>
              <div class="portfolio-links">
                <a href="{{asset('images/buku3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Data Statistik Sektoral"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>DATA STATISTIK SEKTORAL</h2>
        <p>Data Kategori Dilingkungan Pemerintah Kabupaten Bengkalis</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
              </svg>
              <i class="bx bxl-dribbble"></i>
            </div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
              </svg>
              <i class="bx bx-file"></i>
            </div>
            <h4><a href="">Sed Perspiciatis</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
              </svg>
              <i class="bx bx-tachometer"></i>
            </div>
            <h4><a href="">Magni Dolores</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-yellow">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
              </svg>
              <i class="bx bx-layer"></i>
            </div>
            <h4><a href="">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
              </svg>
              <i class="bx bx-slideshow"></i>
            </div>
            <h4><a href="">Dele Cardo</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
              </svg>
              <i class="bx bx-arch"></i>
            </div>
            <h4><a href="">Divera Don</a></h4>
            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>PEJABAT PIMPINAN DAERAH</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{asset('images/bupati.jpg')}}" class="testimonial-img" alt="">
              <h3>Kasmarni, S.Sos, MMP</h3>
              <h4>Bupati Bengkalis</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Saya Yakin Dengan Adanya Sistem Informasi Capaian Kinerja Elektronik Kabupaten Bengkalis (SICAKEB) Semoga Penilaian dan Predikat Kabupaten Bengkalis Terus Menjadi Yang Terbaik Untuk Terwujudnya Bengkalis BERMASA.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{asset('images/wabup.jpg')}}" class="testimonial-img" alt="">
              <h3>H. Bagus Santoso, MP</h3>
              <h4>Wakil Bupati Bengkalis</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Mudah-mudahan Sistem Informasi Capaian Kinerja Elektronik Kabupaten Bengkalis (SICAKEB) Terus Memberikan Yang Terbaik Dalam Penilaian Capaian Kinerja dalam mendukung terwujudnya Kabupaten Bengkalis Yang BERMASA.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{asset('images/sekda.png')}}" class="testimonial-img" alt="">
              <h3>H. Bustami HY, SH., MM</h3>
              <h4>Sekretaris Daerah</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Semoga Dengan Aplikasi Sistem Informasi Capaian Kinerja Elektronik Kabupaten Bengkalis (SICAKEB) Bisa Selalu Memberikan Hasil Penilaian Capaian Kinerja Yang Terbaik Untuk Mewujudkan Kabupaten Bengkalis Yang BERMASA.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{asset('images/kadis.jpg')}}" class="testimonial-img" alt="">
              <h3>Hendrik Dwi Yatmoko, S.Sos, MT</h3>
              <h4>Kepala Dinas Komunikasi Informatika dan Statistik</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Sistem Informasi Capaian Kinerja Elektronik Kabupaten Bengkalis (SICAKEB) Akan Terus Berupaya Untuk Memberikan Penilaian Capaian Kinerja Dalam Mendukung Terwujudnya Visi Kabupaten Bengkalis Yang BERMASA.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{asset('images/kabid.jpg')}}" class="testimonial-img" alt="">
              <h3>Azmar, S.Kom, MIP</h3>
              <h4>Kepala Bidang Statistik dan Persandian</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Sistem Informasi Capaian Kinerja Elektronik Kabupaten Bengkalis (SICAKEB) Akan Terus Berupaya Untuk Memberikan Penilaian Capaian Kinerja Dalam Mendukung Terwujudnya Visi Kabupaten Bengkalis Yang BERMASA.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>KONTAK KAMI</h2>
      </div>

      <div class="row mt-1">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Alamat:</h4>
              <p>Jl. Kartini No. 012 Kode Pos 28712 Bengkalis Riau</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>diskominfotik@bengkaliskab.go.id</p>
            </div>

            <div class="phone">
              <i class="bi bi-globe"></i>
              <h4>Website:</h4>
              <p>satudata.bengkaliskab.go.id</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">       
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5100263836557!2d102.10877601475414!3d1.4673225989298937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d15fb61176003d%3A0x69600c0570fcb2a2!2sDinas%20Komunikasi%2C%20Informatika%20Dan%20Statistik%20Kabupaten%20Bengkalis!5e0!3m2!1sid!2sid!4v1673957591465!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form> --}}

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
