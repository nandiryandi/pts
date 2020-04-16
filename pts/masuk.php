<?php 
  session_start();
  require 'config/koneksi.php';
  if(isset($_POST['masuk'])){
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['umur'] = $_POST['umur'];
    $_SESSION['alamat'] = $_POST['alamat'];
    echo "<script>alert('BERHASIL');document.location.href='kuis.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form method="post">
					<h3>MASUK</h3>
					<p>Silahkan Masukkan Data Diri :</p>
					<label class="form-group">
						<input type="text" class="form-control" name="nama" required>
						<span>Nama</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="number" class="form-control" name="umur" required>
						<span for="">Umur</span>
						<span class="border"></span>
					</label>
					<label class="form-group" >
						<textarea name="alamat" class="form-control" required></textarea>
						<span for="">Alamat</span>
						<span class="border"></span>
					</label>
					<button name="masuk">MASUK 
						<i name="masuk" class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>