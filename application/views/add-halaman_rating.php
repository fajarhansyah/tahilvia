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
    <div style="margin-top: 100px;width:30%;margin-left:35%;margin-right:35%;" >
        <form  action="<?php echo base_url(). 'c_halaman_rating/tambah_aksi' ?>" method="post">
                                
                    <label>
                        <input type="radio" name="stars" value="1" name="rating"/>
                        <span class="icon" style="text-color:orange">★</span>
                    </label><br>
                    <label>
                        <input type="radio" name="stars" value="2" name="rating"/>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label><br>
                    <label>
                        <input type="radio" name="stars" value="3" name="rating"/>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label><br>
                    <label>
                        <input type="radio" name="stars" value="4" name="rating"/>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label><br>
                    <label>
                        <input type="radio" name="stars" value="5" name="rating"/>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
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
                       