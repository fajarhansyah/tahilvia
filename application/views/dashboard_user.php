
<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Hay Clean<span></span>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#layanankami">Layanan Kami</a></li>
          <li><a href="#pricing">Cara Pemesanan</a></li>
          <li><?php echo anchor('http://localhost/tahilvia/index.php/dashboard_user/data_pemesanan/'.$this->session->userdata('nama'), '<div>Data Pemesanan</div>') ?></li>
          <?php if($this->session->userdata('username')) { ?>
              <li>
                <a> Selamat Datang <span style="font-weight:100;"><?php echo $this->session->userdata('nama') ?></span></a>

              </li>
              <li>
                <p class="modal-title text-center form-title" style="line-height: 1.1;">&nbsp</p>
                <span style="margin-top:-100px;font-weight:bold;"><?php  echo anchor('auth/logout','Keluar') ?></span>
              </li>
            <?php } else{ ?>
              <li><a href="<?php echo base_url('auth/login') ?>" >Masuk</a></li>
            <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->

  <!--Banner-->
  <div class="banner">
    <div style="min-height: 580px;background:#495057">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">Bersihkan rumah dengan kualitas prima</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Kami siap membuat keluarga anda lebih sehat dan nyaman di rumah</p>
              <p class="small-text">Jam Kerja : Senin - Jumat : 08:00 - 19:00 WIB  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Sabtu - Minggu & Hari Libur : 09:00 - 18:00 WIB</p>
              <a href="<?php echo base_url('step_pemesanan/index') ?>" class="btn get-quote">Pemesanan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Feature-->
  <section id="layanankami" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Layanan Kami</h2>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Basic Care</h4>
                <p>Paket dengan pilihan layanan pembersihan dengan atau tanpa perlengkapan meliputi: Kamar Tidur, Kamar Mandi, Ruang Tamu, Dapur. Durasi Pembersihan 3 - 5 jam</p>
              </div>
              <div class="fea-img pull-left">
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Special Care</h4>
                <p>Pembersihan detail untuk area spesifik seperti pembersihan mendalam untuk dapur, kamar mandi, kasur, dan sebagainya. Dapat dipesan sebagai tambahan dari Basic Care atau terpisah dengan durasi minimal 3 jam</p>
              </div>
              <div class="fea-img pull-left">
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Move-in</h4>
                <p>Paket layanan untuk rumah kosong sebelum ditempati atau setelah renovasi, meliputi jendela, balkon, dan lemari pakaian dalam. Durasi pembersihan lebih kurang 4 - 5 jam.</p>
              </div>
              <div class="fea-img pull-left">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ feature-->

  <!--work-shop-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Mengapa Hay Clean?</h2>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-money"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Harga Terjangkau</h4>
              <p>Semua servis kami mempunyai harga yang tetap disertakan dengan garansi produk untuk AC dan service elektronik.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-users"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Staff Profesional</h4>
              <p>Berdasarkan jam pemesanan dan lokasi Anda, Seekmi dapat mencocokan Anda dengan teknis terlatih dan berkualitas.</P>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-line-chart"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Berkualitas Tinggi</h4>
              <p>Pelanggan dapat memesan semua layanan kami empat jam sebelum waktu pengangkatan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ work-shop-->
  <!--Faculity member-->
  <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Apa Kata Mereka?</h2>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="<?php echo base_url()?>assets2/img/22.png" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Annissa C Soebandono</p>
              <p class="pm-staff-profile-title">Enterpreneur</p>

              <p class="pm-staff-profile-bio">Aku bener-bener puas dengan hasilnya! Bersih, wangi, detail, dan super ramah! Jadi makin nyaman karena mereka sambil ngobrol & bercanda juga sama kita. Sekali dibersihin aja udah berasa banget, gimana kalau dirutinin? Soooo happyyy!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="<?php echo base_url()?>assets2/img/gambar_1.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Yukka Harlanda</p>
              <p class="pm-staff-profile-title">Enterpreneur</p>

              <p class="pm-staff-profile-bio">Saya sangat senang dengan cleaner yang datang tepat waktu dan juga harganya terbilang murah dibandingkan jasa online lainnya</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="<?php echo base_url()?>assets2/img/gambar_2.png" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Yasa Singgih</p>
              <p class="pm-staff-profile-title">Enterpreneur</p>

              <p class="pm-staff-profile-bio">CS Seekmi sangat cepat dan responsif saat menjelaskan proses jasa cleaning yang saya pesan. Dulu saya perlu menghabiskan waktu beberapa lama untuk membersihkan rumah, sekarang saya bisa pesan jasa cleaning kapanpun hanya dengan satu aplikasi. Cleaner nya terlihat sangat profesional dan cekatan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Faculity member-->
  <input type="text"  value=""/>
  <!--Pricing-->
  <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>CARA MEMESAN HAY CLEAN  </h2>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <i class="far fa-hand-point-up fa-5x"></i>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Pilih Layanan Hay Clean</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <!-- <i class="fal fa-map-marked-alt fa-5x"></i> -->
              <i class="far fa-clock fa-5x"></i>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Pilih Waktu dan Lokasi</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <!-- <i class="fal fa-broom  fa-5x"></i> -->
              <i class="fas fa-concierge-bell fa-5x"></i>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Nikmati Pelayanan Terbaik Hay Clean</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Pricing-->
  <!--Footer-->
