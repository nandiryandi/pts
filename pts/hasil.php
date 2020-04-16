<?php 
	session_start();
	include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Covid-19 Risk Test</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form method="post" action="index.php">
					<h3>HASIL TEST</h3>
                    <label class="form-group" >
						<span>Nama : <?php echo $_SESSION['nama']; ?></span>
						<span class="border"></span>
					</label>
                    <br>
                    <label class="form-group" >
						<span>Umur : <?php echo $_SESSION['umur']; ?></span>
						<span class="border"></span>
					</label>
                    <br>
                    <label class="form-group" >
						<span>Alamat : <?php echo $_SESSION['alamat']; ?></span>
						<span class="border"></span>
					</label>
                    <br>
					<label class="form-group" >
						<span><?php echo "Jumlah ya : " .@$_SESSION['hasil'] ?></span>
						<span class="border"></span>
					</label>
                    <label class="form-group" >
						<span><?php echo "Status : " .@$_SESSION['keterangan'] ?></span>
						<span class="border"></span>
					</label>
                    <br>
					<button>TEST ULANG 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>