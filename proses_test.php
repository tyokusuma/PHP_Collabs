<?php

include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pendidikan = $_POST['pendidikan'];
$divisi = $_POST['divisi'];
$foto = $_POST['gambar'];


$sql = "insert into karyawan (nama, alamat, jenis_kelamin, pendidikan, divisi,foto) values ('$nama', '$alamat', '$jenis_kelamin', '$pendidikan', '$divisi','$foto')";
$query = mysqli_query($koneksi, $sql);
		if ($query) {
            include "data_karyawan.php";
		}
		else {
			echo "cek kembali form anda";
		}1

?>