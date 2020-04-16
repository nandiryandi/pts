<?php 

	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Kuesioner</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="" method="post">
					<h3>PENILAIAN RESIKO PRIBADI</h3>
					<br>
					<label class="form-group">
						<span>Saya pergi keluar rumah.</span>
					</label>
						<span><input type="radio" name="1" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="1" value="0" checked="checked" required/>Tidak</span>

					<label class="form-group">
						<span>Saya menggunakan transportasi umum : online , angkot, bus, taksi, kereta api.</span>
					</label>
						<span><input type="radio" name="2" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="2" value="0" checked="checked" required/>Tidak</span>

					<label class="form-group">
						<span>Saya tidak memakai masker pada saat berkumpul dengan orang lain.</span>
					</label>
						<span><input type="radio" name="3" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="3" value="0" checked="checked" required/>Tidak</span>					
					
					<label class="form-group">
						<span>Saya berjabat tangan dengan orang lain.</span>
					</label>
						<span><input type="radio" name="4" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="4" value="0" checked="checked" required/>Tidak</span>		
						
					<label class="form-group">
						<span>Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang kemudi mobil / motor.</span>
					</label>
						<span><input type="radio" name="5" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="5" value="0" checked="checked" required/>Tidak</span>		
						
					<label class="form-group">
						<span>Saya menyentuh benda / uang yang juga disentuh orang lain.</span>
					</label>
						<span><input type="radio" name="6" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="6" value="0" checked="checked" required/>Tidak</span>		
							
					<label class="form-group">
						<span>Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, dan ibadah.</span>
					</label>
						<span><input type="radio" name="7" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="7" value="0" checked="checked" required/>Tidak</span>		
							
					<label class="form-group">
						<span>Saya makan diluar rumah (warung / restaurant).</span>
					</label>
						<span><input type="radio" name="8" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="8" value="0" checked="checked" required/>Tidak</span>		
							
					<label class="form-group">
						<span>Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan.</span>
					</label>
						<span><input type="radio" name="9" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="9" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya berada di wilayah kelurahan tempat pasien tertular.</span>
					</label>
						<span><input type="radio" name="10" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="10" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang(handle) pintu masuk rumah.</span>
					</label>
					<br>
						<span><input type="radio" name="11" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="11" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya tidak mencuci tangan dengan sabun setelah tiba di rumah.</span>
					</label>
						<span><input type="radio" name="12" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="12" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya tidak menyediakan : tissue basah / antiseptic, masker, sabun antiseptic bagi keluarga di rumah.</span>
					</label>
						<span><input type="radio" name="13" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="13" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya tidak segera merendam baju & celana bekas pakai di luar rumah kedalam air panas / sabun.</span>
					</label>
						<span><input type="radio" name="14" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="14" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya tidak segera mandi keramas setelah saya tiba di rumah.</span>
					</label>
						<span><input type="radio" name="15" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="15" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah.</span>
					</label>
						<span><input type="radio" name="16" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="16" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya dalam sehari tidak kena cahaya matahari minimal 15 menit.</span>
					</label>
						<span><input type="radio" name="17" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="17" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya tidak jalan kaki / berolahraga minimal 30 menit setiap hari.</span>
					</label>
						<span><input type="radio" name="18" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="18" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya jarang minum vitamin C & E , dan kurang tidur.</span>
					</label>
						<span><input type="radio" name="19" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="19" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Usia saya diatas 60 tahun.</span>
					</label>
						<span><input type="radio" name="20" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="20" value="0" checked="checked" required/>Tidak</span>		
					
					<label class="form-group">
						<span>Saya mempunyai penyakit : jantung / diabetes / gangguan pernafasan kronik.</span>
					</label>
						<span><input type="radio" name="21" value="1" checked="checked" required/>Ya</span>
						<span><input type="radio" name="21" value="0" checked="checked" required/>Tidak</span>		
					
					<button name="total">SELESAI
						<i name="selesai" class="zmdi zmdi-arrow-right"></i>
					</button>

					<?php 
						require 'config/koneksi.php';

						if (isset($_POST['total'])) {
							$total = $_POST['1'] + $_POST['2'] + $_POST['3'] + $_POST['4'] + $_POST['5'] + $_POST['6'] + $_POST['7'] + $_POST['8'] + $_POST['9'] + $_POST['10'] + $_POST['11'] + $_POST['12'] + $_POST['13'] + $_POST['14'] + $_POST['15'] + $_POST['16'] + $_POST['17'] + $_POST['18'] + $_POST['19'] + $_POST['20'] + $_POST['21'];
							
							if ($total >= 15) {
								$ket = "Resiko Tinggi";
							}elseif ($total >= 8) {
								$ket = "Resiko Sedang";
							}elseif ($total >= 0) {
								$ket = "Resiko Rendah";
							}else {
								echo "Tidak Valid";
							}

							$sql = mysqli_query($con, "INSERT INTO tb_kuis (nama, umur, alamat, total, keterangan) VALUES('$_SESSION[nama]' , '$_SESSION[umur]' , '$_SESSION[alamat]' , '$total', '$ket')");
								if ($sql) {
									$_SESSION['keterangan'] = $ket;
									echo "<script>alert('BERHASIL');document.location.href='hasil.php';</script>";
								}else {
									echo $sql;
									echo mysqli_error($con);
								}
							$_SESSION['hasil'] = $total;
						}
					?>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>