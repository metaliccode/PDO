<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CRUD PDO</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>

	<body>
		<div class="container">
			<h2>Tambah Mahasiswa Baru</h2>
			<form action="index.php" method="POST" class="form-group row">
				NIM : <input type="text" name="nim" required="required" class="form-control" ><br/>
				Nama : <input type="text" name="nama" required="required" class="form-control"><br/>
				Tempat Lahir : <input type="text" name="tempat_lahir" class="form-control"><br/>
				Tanggal Lahir : <input type="text" name="tanggal_lahir" class="form-control"><br/>
				Jenis Kelamin : <input type="text" name="jenis_kelamin" class="form-control"><br/>
				Agama : <input type="text" name="agama" class="form-control"><br/>
				No. Telepon : <input type="text" name="no_telepon" class="form-control"><br/>
				Alamat : <textarea name="alamat" class="form-control"></textarea><br/>
				<input type="submit" name="tambahMhs" value="Tambah" class="btn btn-success">
				<a href="list.php"><input value="Lihat Mhs" class="btn btn-info"></a>
				<input type="reset" value="Batal" class="btn btn-warning">
			</form>
		</div>
	</body>
</html>
<?php
	require('library.php');
	if(isset($_POST['tambahMhs'])){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$tempat_lahir=$_POST['tempat_lahir'];
		$tanggal_lahir=$_POST['tanggal_lahir'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$agama=$_POST['agama'];
		$alamat=$_POST['alamat'];
		$no_telepon=$_POST['no_telepon'];

		//instansiasi class library dari file library.php
		$Lib = new Library();
		//pemanggilan mehod tambahMhs yang ada di class library dengan parameternya ya jangan lupa
		$add = $Lib->tambahMhs($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon);
		if($add == "Success"){
			header('Location: List.php');
		}
	}
 
?>