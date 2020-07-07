<div class="content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Nomer Telfon</th>
                <th>Menu tambahan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Alamat</th>
                <th>Nama Unit</th>
                <th>Jumlah Unit</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
              foreach ($pemesanan as $p) :
                $no++;
                $id_transaksi = $p['id'];
                $transaksi_jasa = $this->db->query("SELECT * FROM tbl_transaksi_jasa WHERE id_transaksi = '$id_transaksi'")->result_array();
              ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $p['nama'] ?></td>
                  <td><?php echo $p['no_telp'] ?></td>
                  <td>
                    <?php
                    if ($p['tidak_ada'] != '') {
                      echo '-' . $p['tidak_ada'] . '<br>';
                    }
                    if ($p['noda_makanan'] != '') {
                      echo '-' . $p['noda_makanan'] . '<br>';
                    }
                    if ($p['noda_minyak'] != '') {
                      echo '-' . $p['noda_minyak'] . '<br>';
                    }
                    if ($p['noda_hewan'] != '') {
                      echo '-' . $p['noda_hewan'] . '<br>';
                    }
                    if ($p['lainnya'] != '') {
                      echo '-' . $p['lainnya'] . '<br>';
                    }
                    ?>
                  </td>
                  <td><?php echo $p['tanggal'] ?></td>
                  <td><?php echo $p['jam'] ?></td>
                  <td><?php echo $p['alamat'] ?></td>
                  <td>
                    <ul>
                      <?php
                      foreach ($transaksi_jasa as $jasa) {
                      ?>
                        <li><?= $jasa['nama_unit'] ?></li>
                      <?php
                      }
                      ?>
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <?php
                      foreach ($transaksi_jasa as $jasa) {
                      ?>
                        <li><?= $jasa['jumlah_unit'] ?></li>
                      <?php
                      }
                      ?>
                    </ul>
                  </td>
                  <td>
                    <a href="<?php echo base_url().'dashboard_admin/update/'. $p['id'] ?>" class="btn btn-primary btn-sm mt-3"> Setuju</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>