<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Uji Validasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet">
	

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="jumbotron well">
				<h1>
					Uji Validasi
				</h1>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-5 column">
			<ol>
                <li>Kunjungi <a href="http://ardha.hol.es/"><strong>Situs ini</strong></a></li>
                <li>Lakukan uji sistem, info login <strong><p class="text-success">tersedia</p></strong> </li>
                <li>Dimohon mengisi kuisioner disamping dengan <p class="text-info"><strong>sebenarnya</strong></p></li>
            </ol>
            
            <div class="alert alert-danger">Posisikan diri anda sebagai <strong>user yang kali pertama menggunakan sistem</strong></div>
            
            <div class="thumbnail">
                <strong>UCAPAN TERIMA KASIH :</strong>
                <img src="assets/yii.jpg" />
            </div>
		</div>
        
		<div class="col-md-7 column">
			<fieldset>
                <legend>Kuisioner</legend>
                
                <?php echo form_open(); ?>
                    <input type="hidden" value="" name="id" />
                    <input type="text" class="form-control" name="nama" placeholder="Nama lengkap" /><br />
                    <input type="email" class="form-control" name="email" placeholder="Email" />
                    
                    <br /><br />
                    <?php for($i=1;$i<=count($soal);$i++){?>
                        
                    <label> <?php echo $soal[$i] ?></label>
                    
                    <div class="radio">
                      <label>
                        <input type="radio" name="soal<?php echo $i ?>" value="4" />
                        Sangat baik
                      </label>
                    </div>
                    
                    <div class="radio">
                      <label>
                        <input type="radio" name="soal<?php echo $i ?>" value="3" />
                        Baik
                      </label>
                    </div>
                    
                    <div class="radio">
                      <label>
                        <input type="radio" name="soal<?php echo $i ?>" value="2" />
                        Kurang baik
                      </label>
                    </div>
                    
                    <div class="radio">
                      <label>
                        <input type="radio" name="soal<?php echo $i ?>" value="1" />
                        Tidak baik
                      </label>
                    </div>
                    <?php } ?>
                    <br /><label>CATATAN</label>
                    <textarea class="form-control" name="catatan" placeholder="Jika terdapat kurang baik / tidak baik, berikan alasan pada kolom ini"></textarea>
                    <br />
                    <input type="submit" name="konfirmasi" value="konfirmasi" class="btn btn-primary btn-block" /><hr />
                <?php echo form_close(); ?>
            </fieldset>
        </div>
	</div>
</div>
</body>
</html>
