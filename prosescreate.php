<?php

include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$pendidikan = $_POST['pendidikan'];
$divisi = $_POST['divisi'];

if (empty($nama) || (empty($alamat) || (empty($jeniskelamin) || (empty($pendidikan) || (empty($divisi)) {
	echo "Field tidak boleh kosong!
	<meta http-equiv='refresh' content='0; url=create.php'>";
}
else {
		$sql = "insert into karyawan (nama, alamat, jeniskelamin, pendidikan, divisi) values ('$nama', '$alamat', '$jeniskelamin', '$pendidikan', '$divisi')";
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