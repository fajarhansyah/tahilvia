<!DOCTYPE html>
<html>
<title>Pemesanan Customer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url() ?>assets_step/css.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Oswald"
    }

    body {
        font-family: "Open Sans"
    }

    [type="date"] {
        background: #fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png) 97% 50% no-repeat;
    }

    [type="date"]::-webkit-inner-spin-button {
        display: none;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0;
    }

    /* custom styles */
    body {
        padding: 4em;
        background: #e5e5e5;
        font: 13px/1.4 Geneva, 'Lucida Sans', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
    }

    label {
        display: block;
    }

    input {
        border: 1px solid #c4c4c4;
        border-radius: 5px;
        background-color: #fff;
        padding: 3px 5px;
        box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
        width: 190px;
    }

    #map {
        height: 100%;
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
    }

    #infowindow-content .title {
        font-weight: bold;
    }

    #infowindow-content {
        display: none;
    }

    #map #infowindow-content {
        display: inline;
    }

    .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
    }

    #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
    }

    .pac-controls {
        display: inline-block;
        padding: 5px 11px;
    }

    .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }

    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
    }

    #target {
        width: 345px;
    }
</style>


<body>

    <!-- Navigation bar with social media icons -->


    <!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1600px">

        <!-- Header -->


        <!-- Image header -->


        <!-- Grid -->
        <form id="msform" action="<?php echo base_url() . 'step_pemesanan/tambah_proses_pemesanan' ?>" method="post">
            <!-- progressbar -->
            <ul id="progressbar">
                <!-- <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li> -->
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Pesan Jasa</h2>
                <h3 class="fs-subtitle">Deskripsi Jasa</h3>
                <h3 class="fs-subtitle">Layanan cuci sofa, bantalan sofa, springbed dan karpet dari kotoran, noda dan debu. Semua peralatan dan chemical pembersih kami sediakan dan berkualitas</h3>
                <h3 style="text-align: left;">Apakah ada noda ?</h3>
                <?php
                foreach ($pemesanan as $key => $qwe) {
                    
                    $tidakada = 'unchecked';
                    $nodamakanan = 'unchecked';
                    $nodaminyak = 'unchecked';
                    $nodahewan = 'unchecked';
                    $select_1 = $qwe['tidak_ada'];
                    $select_2 = $qwe['noda_makanan'];
                    $select_3 = $qwe['noda_minyak'];
                    $select_4 = $qwe['noda_hewan'];
                    $select_5 = $qwe['lainnya'];
                    if ($select_1 == 'Tidak ada') {
                        $tidakada = 'checked';
                    }  if ($select_2 == 'Noda Makanan') {
                        $nodamakanan = 'checked';
                    }  if ($select_3 == 'Noda Minyak') {
                        $nodaminyak = 'checked';
                    }  if ($select_4 == 'Noda Hewan') {
                        $nodahewan = 'checked';
                    } 
                }
                ?>
                <div class="custom-control custom-checkbox mr-sm-2" style="text-align: left;">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="tidak_ada" value="Tidak ada" style="width: 10%;" <?= $tidakada ?>>
                    <label class="custom-control-label" for="customControlAutosizing">Tidak Ada</label>
                </div>
                <div class="custom-control custom-checkbox mr-sm-2" style="text-align: left;">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="noda_makanan" value="Noda Makanan" style="width: 10%;" <?= $nodamakanan ?>>
                    <label class="custom-control-label" for="customControlAutosizing">Noda Makanan</label>
                </div>
                <div class="custom-control custom-checkbox mr-sm-2" style="text-align: left;">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="noda_minyak" value="Noda Minyak" style="width: 10%;" <?= $nodaminyak ?>>
                    <label class="custom-control-label" for="customControlAutosizing">Noda Minyak</label>
                </div>
                <div class="custom-control custom-checkbox mr-sm-2" style="text-align: left;">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="noda_hewan" value="Noda Hewan" style="width: 10%;" <?= $nodahewan ?>>
                    <label class="custom-control-label" for="customControlAutosizing">Noda Hewan</label>
                </div>
                <div class="custom-control custom-checkbox mr-sm-2" style="text-align: left;">
                    <label class="custom-control-label" for="customControlAutosizing">Lainnya</label>
                    <input type="text" name="nodalainya" <?= $select_5 ?> />
                </div>
                <hr>
                <?php foreach ($menuitem as $mi) :
                  $id_transaksi = $qwe['id'];
                  $ruwet = '';
                  $transaksi_jasa = $this->db->query("SELECT * FROM tbl_transaksi_jasa WHERE id_transaksi = '$id_transaksi'")->result_array();
                  foreach ($transaksi_jasa as $key => $tj) {
                    
                    if($mi->id == $tj['jumlah_unit']){
                        $ruwet= $tj['jumlah_unit'];
                    }
                    print_r($ruwet);
                  }
                  
                 
                    ?>
                    
                    <div class="custom-control custom-checkbox mr-sm-2" style="text-align: left;display: flex;">
                        <img src="<?php echo base_url() . 'uploads/' . $mi->gambar ?>" class="rounded float-left" alt="..." style="width: 50px;height: 50px;">
                        <div style="width:38%;margin-left:20px;">
                            <span style="font-weight:bold;"><?php echo $mi->nama ?></span><br>
                            <span><?php echo $mi->satuan ?></span><br>
                            <span style="font-size:12px">Rp <?php echo number_format($mi->harga, 0, ',', '.') ?></span>
                            <input type="hidden" class="nama_unit" name="nama_unit[]" id="unit-<?= $mi->id ?>" value="<?php echo $mi->nama ?>">
                            <input type="hidden" class="harga_unit" name="harga_unit[]" id="harga-<?= $mi->id ?>" value="<?php echo $mi->harga ?>">
                        </div>
                        <div class="input-group" style="width:35%;margin-top:3%">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant<?= $mi->id ?>" style="padding: 5px;">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </span>
                            
                            <input type="text" name="quant[]" id="quant<?= $mi->id ?>" class="form-control input-number" value="<?= $tj['jumlah_unit']?>" min="0" max="9" style="margin-bottom: 0px;">
                            
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant<?= $mi->id ?>" style="padding: 5px;">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                    
                <?php endforeach; ?>
                <!-- <div class="custom-control custom-checkbox mr-sm-2" style="text-align: left;display: flex;margin-top:10px;">
          <img src="<?php echo base_url() ?>assets_step/img/sofa_jumbo.jpg" class="rounded float-left" alt="..." style="width: 50px;height: 50px;">
          <div style="width:38%;margin-left:20px;">
            <span style="font-weight:bold;">Sofa Jumbo</span><br>
            <span>Per dudukan</span><br>
            <span style="font-size:12px">Rp 35.000</span>
            <input type="hidden" class="nama_unit" name="nama_unit[]" id="unit-2" value="Sofa Jumbo">
            <input type="hidden" class="harga_unit" name="harga_unit[]" id="harga-2" value="35000">
          </div>
          <div class="input-group" style="width:35%;margin-top:3%">
            <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant2" style="padding: 5px;">
                <span class="glyphicon glyphicon-minus"></span>
              </button>
            </span>
            <input type="text" name="quant[]" id="quant2" class="form-control input-number" value="0" min="0" max="9" style="margin-bottom: 0px;">
            <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant2" style="padding: 5px;">
                <span class="glyphicon glyphicon-plus"></span>
              </button>
            </span>
          </div>
        </div> -->

                <!-- <input type="password" name="cpass" placeholder="Confirm Password" /> -->
                <button type="button" name="next" class="next btn btn-success"> Lanjut</button>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Pesan Jasa</h2>
                <h3 class="fs-subtitle">Kapan Anda Membutuhkan Layanan ?</h3>
                <input type="date" name="tanggal" id="tanggal" style="font-size: 25px;width: 91%;">
                <h3 class="fs-subtitle">Pukul berapa Anda Membutuhkan Layanan ?</h3>
                <input type="button" name="previous" class="btn btn-default btn-jam" value="08.00 - 11.00" />
                <input type="button" name="previous" class="btn btn-default btn-jam" value="12.00 - 14.00" />
                <input type="button" name="previous" class="btn btn-default btn-jam" value="15.00 - 18.00" />
                <input type="hidden" name="jam" id="jam" style="font-size: 25px;width: 91%;">
                <br>
                <hr>
                <h3 class="fs-subtitle">Rincian Alamat</h3>
                <textarea name="alamat" id="alamat" placeholder="Alamat"></textarea>
                <div id="map"></div>
                <!-- <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" /> -->
                <button type="button" name="previous" class="previous btn btn-danger"> Kembali</button>
                <button type="button" name="next" class="next btn btn-success"> Lanjut</button>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Kontak Penerima</h2>
                <input type="text" name="nama" placeholder="Nama Penerima" />
                <input type="text" name="no_telp" placeholder="Nomor Handphone" />
                <h2 class="fs-title">Detail Pesanan</h2>
                <h3 class="fs-subtitle" style="text-decoration: underline;">Jasa yang di pilih</h3>
                <!-- <span> Cuci Sofa Bed</span>
        <span> Cuci Bantalan Sofa</span> -->
                <span id="jasa-detail"></span>
                <h3 class="fs-subtitle" style="text-decoration: underline;">Tanggal pengerjaan</h3>
                <!-- <span> 15-05-2020</span> : <span>08.00-11.00</span> -->
                <span id="tanggal-detail"></span> : <span id="jam-detail"></span>
                <h3 class="fs-subtitle" style="text-decoration: underline;">Rincian Alamat</h3>
                <span id="alamat-detail"></span>
                <hr>
                <span style="float: right;">
                    Subtotal :
                    <!-- <span style="color:green;">Rp.175.000</span> -->
                    <span id="sub-total"></span>
                    <input type="hidden" name="total" id="sub-total-input">
                </span>
                <br>
                <hr>
                <button type="button" name="previous" class="previous btn btn-danger"> Kembali</button>
                <!-- <input type="submit" name="submit" class="submit action-button" value="Pesan" /> -->
                <button type="submit" class="btn btn-success">Simpan</button>

            </fieldset>
        </form>

    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initAutocomplete" async defer>
    </script>
    <script>
        $('.btn-number').click(function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[id='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('id');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        $(document).on('click', '.next', function() {
            let nama_unit = $('.nama_unit');
            let harga_unit = $('.harga_unit');
            let jumlah_unit = $('.input-number');
            let tanggal = $('#tanggal').val();
            let alamat = $('#alamat').val();
            let jam = $('#jam').val();
            let details = new Array();

            for (let i = 0; i < nama_unit.length; i++) {
                details[i] = [
                    $(nama_unit[i]).val(),
                    parseInt($(harga_unit[i]).val()),
                    parseInt($(jumlah_unit[i]).val()),
                ]
            }

            $(document).on('click', '.btn-jam', function() {
                let jam = $(this).val()
                document.getElementById('jam').value = jam;

            });

            detail(details, tanggal, jam, alamat);
        });

        function detail(detail, tanggal, jam, alamat) {
            let jasa = '';
            let total = 0;
            for (let i = 0; i < detail.length; i++) {
                if (detail[i][2] !== 0) {
                    jasa += detail[i][0] + '<br>';
                    total += detail[i][1] * detail[i][2];
                }
            }
            console.log(jasa);
            $('#jasa-detail').html(jasa);
            $('#tanggal-detail').html(tanggal);
            $('#jam-detail').html(jam);
            $('#alamat-detail').html(alamat);
            $('#sub-total').html(total);
            document.getElementById('sub-total-input').value = total;
        }
    </script>

    <script src="<?php echo base_url() ?>assets_step/js/index.js"></script>
</body>

</html>