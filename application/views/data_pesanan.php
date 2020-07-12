<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets2/table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets2/table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets2/table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets2/table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets2/table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets2/table/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../assets2/table/css/main.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        /*
*************************************
          Copyright 2018
               benn
*************************************
*/

/* Google Fonts */
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

/* set global font to Open Sans */
body {
  font-family: 'Open Sans', 'sans-serif';
  background-image: url(http://benague.ca/files/pw_pattern.png);
}

/* header */
h1 {
  color: #55acee;
  text-align: center;
}

/* header/copyright link */
.link {
  text-decoration: none;
  color: #55acee;
  border-bottom: 2px dotted #55acee;
  transition: .3s;
  -webkit-transition: .3s;
  -moz-transition: .3s;
  -o-transition: .3s;
  cursor: url(http://cur.cursors-4u.net/symbols/sym-1/sym46.cur), auto;
}

.link:hover {
  color: #2ecc71;
  border-bottom: 2px dotted #2ecc71;
}

/* button div */
#buttons {
  padding-top: 50px;
  text-align: center;
}

/* start da css for da buttons */
.btn {
  border-radius: 5px;
  padding: 15px 25px;
  font-size: 22px;
  text-decoration: none;
  margin: 20px;
  color: #fff;
  position: relative;
  display: inline-block;
}

.btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}


.red {
  background-color: #e74c3c;
  box-shadow: 0px 5px 0px 0px #CE3323;
}

.red:hover {
color:#FFFFFF;
  background-color: #FF6656;
}

/* copyright stuffs.. */
p {
  text-align: center;
  color: #55acee;
  padding-top: 20px;
}
    </style>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				

				<div class="table100 ver3 m-b-20">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell50 column1" style="width: 8%;" >No.</th>
									<th class="cell100 column2" style="width: 10%;">Nama</th>
									<th class="cell100 column3" style="width: 10%;">Nomer Telfon</th>
									<th class="cell100 column4" style="width: 10%;">Menu tambahan</th>
									<th class="cell100 column5" style="width: 10%;">Tanggal</th>
									<th class="cell100 column6" style="width: 10%;">Jam</th>
									<th class="cell100 column7" style="width: 10%;">Alamat</th>
									<th class="cell100 column8" style="width: 10%;">Nama Unit</th>
									<th class="cell100 column9" style="width: 10%;">Jumlah Unit</th>
									<th class="cell100 column10" style="width: 10%;">action</th>
                                </tr>
							</thead>
						</table>
					</div>
                    <?php
                $no = 0;
                foreach ($pemesanan as $p) :
                    $no++;
                    $id_transaksi = $p['id'];
                    $transaksi_jasa = $this->db->query("SELECT * FROM tbl_transaksi_jasa WHERE id_transaksi = '$id_transaksi'")->result_array();
                ?>
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                            <tr class="row100 body">
                                <td class="cell50 column1" style="width: 8%;" ><?php echo $no ?></td>
                                <td class="cell100 column2" style="width: 10%;"><?php echo $p['nama'] ?></td>
                                <td class="cell100 column3" style="width: 10%;"><?php echo $p['no_telp'] ?></td>
                                <td class="cell100 column4" style="width: 10%;">
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
                                <td class="cell100 column5" style="width: 10%;"><?php echo $p['tanggal'] ?></td>
                                <td class="cell100 column6" style="width: 10%;"><?php echo $p['jam'] ?></td>
                                <td class="cell100 column7" style="width: 10%;"><?php echo $p['alamat'] ?></td>
                                <td class="cell100 column8" style="width: 10%;">
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
                                <td class="cell100 column9" style="width: 10%;">
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
                                <td class="cell100 column10" style="width: 10%;">
                                    <a href="<?php echo base_url().'step_pemesanan/edit/'. $p['id'] ?>" type="button"  class="btn-success btn-sm" style="padding:5px 19px;">Ubah</a><br><br>
                                    <a href="#myModal" data-toggle="modal" class="btn-danger btn-sm">Batalkan</a>
                                </td>
                                
                            </tr>
                            <?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>

                <div align="center">
                <a href="index" class="btn red">Ke Halaman Utama</a>
				</div>
			</div>
		</div>
	</div>

    <div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
    </div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-body">
                    <p style="color:#000000">Apakah kamu yakin untuk membatalkan pesananmu ? Proses ini tidak dapat di kembalikan.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <a href="<?php echo base_url().'dashboard_user/delete/'. $p['id'] ?>"><button type="button" class="btn btn-danger">Iya</button></a>
                </div>
            </div>
        </div>
    </div>     
<!--===============================================================================================-->	
	<script src="../../assets2/table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets2/table/vendor/bootstrap/js/popper.js"></script>
	<script src="../../assets2/table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets2/table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets2/table/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="../../assets2/js/main.js"></script>

</body>
</html>