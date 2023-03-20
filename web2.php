<form action="welcome.php" method="post">
  Nama: <input type="text" name="name"><br>
  Tanggal lahir: <input type="date" name="birthdate"><br>
  Pekerjaan: <select name="job">
    <option value="guru">Guru</option>
    <option value="dokter">Dokter</option>
    <option value="programmer">Programmer</option>
  </select><br>
  <input type="submit">
</form>
<?php
// Mendapatkan data form
$name = $_POST["name"];
$birthdate = $_POST["birthdate"];
$job = $_POST["job"];

// Menghitung umur berdasarkan tanggal lahir
$today = date("Y-m-d");
$diff = date_diff(date_create($birthdate), date_create($today));
$age = $diff->format("%y");

// Menentukan gaji berdasarkan pekerjaan
switch ($job) {
  case "guru":
    $salary = "Rp. 5.000.000";
    break;
  case "dokter":
    $salary = "Rp. 10.000.000";
    break;
  case "programmer":
    $salary = "Rp. 15.000.000";
    break;
}

// Menampilkan output
echo "Halo, $name.<br>";
echo "Umur Anda adalah $age tahun.<br>";
echo "Anda bekerja sebagai $job dengan gaji $salary per bulan.<br>";
?>