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
        <button class="btn btn-sm btn-primary mb-3 mt-3 ml-3" data-toggle="modal" data-target="#tambah_portofolio"><i class="fas fa-plus fa-sm"></i> Tambah Portofolio</button>
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>gambar</th>
                <th>Satuan</th>
                <th>harga</th>
                <th style="text-align:center" colspan="2">action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
              foreach ($menuitem as $p) :
                $no++;
              ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $p->nama ?></td>
                  <td><img src="<?php echo base_url().'uploads/'.$p->gambar?>" style="height: 100px;width: 100px;" class="img-fluid" alt=""> <?php echo $p->gambar ?></td>
                  <td><?php echo $p->satuan ?></td>
                  <td><?php echo $p->harga ?></td>
                  <td><?php echo anchor('menu_item/edit/'.$p->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                  <td><?php echo anchor('menu_item/hapus/'.$p->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
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


<!-- Modal -->
<div class="modal fade" id="tambah_portofolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Portofolio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'menu_item/tambah_item' ?>" method="post" enctype="multipart/form-data">
          <div class="form-grub">
            <label>Nama </label>
            <input type="text" name="nama" class="form-control"></input>
          </div>
          <div class="form-grub">
            <label>Gambar </label><br>
            <input type="file" name="gambar" class="form-control"></input>
          </div>
          <div class="form-grub">
            <label>Satuan</label>
            <input type="text" name="satuan" class="form-control"></input>
          </div><div class="form-grub">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control"></input>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
