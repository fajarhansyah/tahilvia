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
                    <li><?php echo anchor('http://localhost/tahilvia/index.php/dashboard_user/data_pemesanan/' . $this->session->userdata('nama'), '<div>Data Pemesanan</div>') ?></li>
                    <?php if ($this->session->userdata('username')) { ?>
                        <li>
                            <a> Selamat Datang <span style="font-weight:100;"><?php echo $this->session->userdata('nama') ?></span></a>

                        </li>
                        <li>
                            <p class="modal-title text-center form-title" style="line-height: 1.1;">&nbsp</p>
                            <span style="margin-top:-100px;font-weight:bold;"><?php echo anchor('auth/logout', 'Keluar') ?></span>
                        </li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('auth/login') ?>">Masuk</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <section id="layanankami" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Testimoni</h2>
                    <hr class="bottom-line">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Review</button>
                </div>
                <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Review</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form  action="<?php echo base_url(). 'c_halaman_rating/tambah_aksi' ?>" method="post">
                                            <label>
                                                <input type="radio" name="rating" value="1"/>
                                                <span class="icon" style="color:orange">★</span>
                                            </label><br>
                                            <label>
                                                <input type="radio" name="rating" value="2" />
                                                <span class="icon" style="color:orange">★</span>
                                                <span class="icon" style="color:orange">★</span>
                                            </label><br>
                                            <label>
                                                <input type="radio" name="rating" value="3" />
                                                <span class="icon" style="color:orange">★</span>
                                                <span class="icon" style="color:orange">★</span>
                                                <span class="icon" style="color:orange">★</span>
                                            </label><br>
                                            <label>
                                                <input type="radio" name="rating" value="4" />
                                                <span class="icon" style="color:orange">★</span>
                                                <span class="icon" style="color:orange">★</span>
                                                <span class="icon" style="color:orange">★</span>
                                                <span class="icon" style="color:orange">★</span>
                                            </label><br>
                                            <label>
                                                <input type="radio" name="rating" value="5" />
                                                <span class="icon" style="color:orange">★</span>
                                                <span class="icon" style="color:orange">★</span>
                                                <span class="icon" style="color:orange">★</span>
                                                <span class="icon" style="color:orange">★</span>
                                                <span class="icon" style="color:orange">★</span>
                                            </label>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Masukkan Nama Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    <div class="modal-footer">
                                        <input class="btn btn-primary" type="submit" value="Tambah">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $no = 0;
                foreach ($rating as $rt) :
                ?>

                    <div class="feature-info">
                        <div class="fea">
                            <div class="col-md-4">
                                <div class="heading pull-right">
                                    <?php
                                    $satu = '';
                                    $dua = '';
                                    $tiga = '';
                                    $empat = '';
                                    $lima = '';
                                    $rating = $rt['rating'];
                                    if ($rating == '1') {
                                        $satu = 'checked';
                                    } else if ($rating == '2') {
                                        $satu = 'checked';
                                        $dua = 'checked';
                                    } else if ($rating == '3') {
                                        $satu = 'checked';
                                        $dua = 'checked';
                                        $tiga = 'checked';
                                    } else if ($rating == '4') {
                                        $satu = 'checked';
                                        $dua = 'checked';
                                        $tiga = 'checked';
                                        $empat = 'checked';
                                        
                                    } else if ($rating == '5') {
                                        $satu = 'checked';
                                        $dua = 'checked';
                                        $tiga = 'checked';
                                        $empat = 'checked';
                                        $lima = 'checked';
                                    }
                                    ?>
                                    <span class="fa fa-star <?PHP print $satu; ?>"></span>
                                    <span class="fa fa-star <?PHP print $dua; ?>"></span>
                                    <span class="fa fa-star <?PHP print $tiga; ?>"></span>
                                    <span class="fa fa-star <?PHP print $empat; ?>"></span>
                                    <span class="fa fa-star <?PHP print $lima; ?>"></span>

                                    <h4><?php echo $rt['nama'] ?></h4>
                                    <p><?php echo $rt['deskripsi'] ?></p>
                                </div>
                                <div class="fea-img pull-left">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>