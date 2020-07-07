<body class="bg-gradient-primary" style="background-image:unset;background-color:#5fcf80">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Masuk</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan') ?>
                  <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email..." name="username">
                      <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password..." name="password">
                      <?php echo form_error('password','<div class="text-danger small ml-2">','</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary form-control" style="background-color:#5fcf80;border-color:#5fcf80;">Masuk</button>
                    <hr>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" style="color:#5fcf80;" href="<?php echo base_url('registrasi/index') ?>">Belum Punya akun? Daftar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


</html>
