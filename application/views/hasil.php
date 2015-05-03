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
    
        <table class="table table-stripped">
            <thead>
                <th>Koresponden</th>
                <th>Nama</th>
                <th>Email</th>
                <?php for($i=1;$i<=10;$i++){?>
                <th>Soal <?php echo $i ?></th>    
                <?php } ?>
                <th>Catatan</th>                
            </thead>
            
            <tbody>
                <?php $i=1;foreach($hasil as $result){?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $result['nama'] ?></td>
                    <td><?php echo $result['email'] ?></td>
                    <?php for($j=1;$j<=10;$j++){?>
                    <td><?php echo $result['soal'.$j]?></td>    
                    <?php } ?>
                    <td><?php echo $result['catatan'] ?></td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
		
	</div>
</div>
</body>
</html>
