<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>List Mahasiswa</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>

	<body>
		<div class="container">
			<h2>Daftar Nama Mahasiswa</h2>
			<table class="table">
				<tr>
					<td>NIM</td>
					<td>Nama</td>
					<td>Jenis Kelamin</td>
					<td>Alamat</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
				<?php
				require("library.php");
				//instansiasi class library
				$Lib = new Library();
				//memanggil method untuk menampilkan record
				$show = $Lib->showmahasiswa();
				while($data = $show->fetch(PDO::FETCH_OBJ)){
				echo "
				<tr>
					<td>$data->nim</td>
					<td>$data->nama</td>
					<td>$data->jenis_kelamin</td>
					<td>$data->alamat</td>
					<!--kita mengambil nilai id saat parsing data yang kemudian dikirim ke edit.php--> 
					<td><a class='btn btn-info' href='edit.php?id=$data->id'>Edit</td>
					<!--untuk menghapus sama seperti edit namun disini kita memanggil nim sebagai index penghapusan yang nantunya dijalankan dengan method delete-->
					<td><a class='btn btn-danger' href='list.php?delete=$data->nim'>Delete</a></td>
				</tr>";
				};
				?>
			</table>
			<a href="index.php" class="btn btn-success">Tambah Mahasiswa Baru</a>
		</div>
	</body>
</html>
 
<?php
//proses penghapusan apabila kita mengklik button delete maka akan menjalankan source code dibawah ini
if(isset($_GET['delete'])){
//memanggil method delete yang ada di class Library
$del = $Lib->deleteMhs($_GET['delete']);
header('Location: list.php');
}
?>