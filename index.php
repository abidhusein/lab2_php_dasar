<html>
<head>
	<title>Program PHP Sederhana</title>
</head>
<body>
	<h1>Program PHP Sederhana</h1>
	<form method="post" action="">
		<label for="nama">Nama:</label>
		<input type="text" name="nama" id="nama" required><br><br>
		
		<label for="tgl_lahir">Tanggal Lahir:</label>
		<input type="date" name="tgl_lahir" id="tgl_lahir" required><br><br>
		
		<label for="pekerjaan">Pekerjaan:</label>
		<select name="pekerjaan" id="pekerjaan" required>
			<option value="">--Pilih Pekerjaan--</option>
			<option value="Manager">Manager</option>
			<option value="Programmer">Programmer</option>
			<option value="Marketing">Marketing</option>
		</select><br><br>
		
		<input type="submit" value="Submit">
	</form>
	
	<?php
		if($_POST){
			$nama = $_POST['nama'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$pekerjaan = $_POST['pekerjaan'];
			
			$umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;
			
			echo "<br>";
			echo "Nama: ".$nama."<br>";
			echo "Tanggal Lahir: ".$tgl_lahir."<br>";
			echo "Umur: ".$umur." tahun<br>";
			
			switch ($pekerjaan) {
				case 'Manager':
					$gaji = 10000000;
					break;
				case 'Programmer':
					$gaji = 8000000;
					break;
				case 'Marketing':
					$gaji = 6000000;
					break;
				default:
					$gaji = 0;
					break;
			}
			
			echo "Pekerjaan: ".$pekerjaan."<br>";
			echo "Gaji: Rp. ".number_format($gaji, 0, ",", ".").",- per bulan<br>";
		}
	?>
</body>
</html>
