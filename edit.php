<?php
require('library.php');
 
if(isset($_GET['id'])){
$Lib = new Library();
$id = $Lib->editMhs($_GET['id']);
$edit = $id->fetch(PDO::FETCH_OBJ);
echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Data Mahasiswa</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h2>Ubah Data Mahasiswa</h2>
<form action="edit.php" method="POST" class="form-group">
<input type="hidden" name="id" value="'.$edit->id.'" required="required" class="form-control"><br>
NIM : <input type="text" name="nim" value="'.$edit->nim.'" required="required" class="form-control"><br>
Nama : <input type="text" name="nama" value="'.$edit->nama.'" class="form-control"><br>
Tempat Lahir : <input type="text" value="'.$edit->nama.'" name="tempat_lahir" class="form-control"><br/>
Tanggal Lahir : <input type="text" value="'.$edit->tanggal_lahir.'" name="tanggal_lahir" class="form-control"><br/>
Jenis Kelamin : <input type="text" value="'.$edit->jenis_kelamin.'" name="jenis_kelamin" class="form-control"><br/>
Agama : <input type="text" name="agama" value="'.$edit->agama.'" class="form-control"><br/>
No. Telepon : <input type="text" value="'.$edit->no_telepon.'" name="no_telepon" class="form-control"><br/>
Alamat : <textarea name="alamat" class="form-control">'.$edit->alamat.'</textarea><br/>
				
				
<input type="submit" name="updateMhs" value="updateMhs" class="btn btn-info">
<input type="reset" value="Batal" class="btn btn-warning">
</form>
</div>
</body>
</html>
';
}
 
if(isset($_POST['updateMhs'])){
		$id = $_POST['id'];
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$tempat_lahir=$_POST['tempat_lahir'];
		$tanggal_lahir=$_POST['tanggal_lahir'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$agama=$_POST['agama'];
		$alamat=$_POST['alamat'];
		$no_telepon=$_POST['no_telepon'];

//instansiasi class library
$Lib = new Library();
//pemanggilan method update untuk menjalankan update record yang ada di method updateMhs di class Library
$upd = $Lib->updateMhs($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon);
if($upd == "Success"){
header('Location: list.php');
}
}
 
?>