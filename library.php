<?php
	class Library{
		public function __construct(){
			$this->db = new PDO('mysql:host=localhost;dbname=crud_oop','root','');
		}
		public function tambahMhs($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon){
			$sql = "INSERT INTO mahasiswa (nim, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, no_telepon) VALUES('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat', '$no_telepon')";
			$query = $this->db->query($sql);
			if(!$query){
				return "Failed";
			}
			else{
				return "Success";
			}
		}
		public function editMhs($id){
			$sql = "SELECT * FROM mahasiswa where id='$id'";
			$query = $this->db->query($sql);
			return $query;
		}
		public function updateMhs($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon){
			$sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', no_telepon='$no_telepon' WHERE id='$id'";
			$query = $this->db->query($sql);
			if(!$query){
				return "Failed";
			}
			else{
				return "Success";
			}
		}
			 
		public function showmahasiswa(){
			$sql = "SELECT * FROM mahasiswa order by id desc";
			$query = $this->db->query($sql);
			return $query;
		}
		public function deleteMhs($nim){
			$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
			$query = $this->db->query($sql);
		}
	}
?>