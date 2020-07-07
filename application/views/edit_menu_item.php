<div class="content-wrapper">
  <div class="row">
    <div class="col-12">
      
<div class="container-fluid">
  <h3>Edit Data Item</h3>
  <?php foreach ($menuitem as $prts) :?>
    <form class="p" id="form2" action="<?php echo base_url().'menu_item/update' ?>" method="post" enctype="multipart/form-data">
      <div class="for-grub">
        <label>Nama Portofolio</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $prts->id ?>" >
        <input type="text" name="nama" class="form-control" value="<?php echo $prts->nama ?>" >
      </div>
      <div class="for-grub">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control" required>
      </div>
      <div class="for-grub">
        <label>Deskripsi</label>
        <input type="text" name="satuan" class="form-control" value="<?php echo $prts->satuan ?>" >
      </div>
      <div class="for-grub">
        <label>Lokasi</label>
        <input type="text" name="harga" class="form-control" value="<?php echo $prts->harga ?>" >
      </div>

      <button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan </button>
    </form>
  <?php endforeach; ?>
</div>
    </div>
  </div>
</div>

<script>
$('#form2 input[type=file]').on('change invalid', function() {
    var textfield = $(this).get(0);

    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');

    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Upload Ulang Gambar');
    }
});
</script>
