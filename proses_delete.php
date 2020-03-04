<?php

	include "koneksi.php";

	$no = $_GET['no'];
	$sql = "delete from karyawan where id = '$no'";
	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		echo "berhasil hapus 
		<meta http-equiv='refresh' content='0;url=data_karyawan.php'> ";
	} else {
		echo "gagal hapus
		<meta http-equiv='refresh' content='0;url=data_karyawan.php'> ";
	}

?>