<?php

include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pendidikan = $_POST['pendidikan'];
$divisi = $_POST['divisi'];

if (empty($nama) || empty($alamat) || empty($jenis_kelamin) || empty($pendidikan) || empty($divisi)) {
	echo "Field tidak boleh kosong!
	<meta http-equiv='refresh' content='0; url=create.php'>";
}
else {
		$sql = "insert into karyawan (nama, alamat, jenis_kelamin, pendidikan, divisi) values ('$nama', '$alamat', '$jenis_kelamin', '$pendidikan', '$divisi')";
		$query = mysqli_query($koneksi, $sql);

		if ($query) {
			echo "berhasil
				<meta http-equiv='refresh' content='0; url=data_karyawan.php'>";
		}
		else {
			echo "cek kembali form anda
				<meta http-equiv='refresh' content='0; url=data_karyawan.php'>";
		}
}

?>