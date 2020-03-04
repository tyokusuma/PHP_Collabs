<?php

	include "koneksi.php";

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$pendidikan = $_POST['pendidikan'];
	$divisi = $_POST['divisi'];

	$sql = "update karyawan set nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin',pendidikan='$pendidikan' where id='$id'";
	$query = mysqli_query($koneksi,$sql);

	if ($sql) {
		echo "berhasil update
		<meta http-equiv='refresh' content='1; url=data_karyawan.php'>";
	} else {
		echo "gagal update";
	}

?>