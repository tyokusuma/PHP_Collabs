<?php

include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pendidikan = $_POST['pendidikan'];
$divisi = $_POST['divisi'];
$foto = $_FILES['gambar']['name'];
$position = $_FILES['gambar']['tmp_name'];
$pindah = "foto/$foto";   /*direktori*/

if (empty($nama) || empty($alamat) || empty($jenis_kelamin) || empty($pendidikan) || empty($divisi) || empty($foto)) {
	echo "Field tidak boleh kosong!
	<meta http-equiv='refresh' content='0; url=create.php'>";
}
else {
		move_uploaded_file($position, $pindah);
		$sql = "insert into karyawan (nama, alamat, jenis_kelamin, pendidikan, divisi, foto) values ('$nama', '$alamat', '$jenis_kelamin', '$pendidikan', '$divisi', '$foto')";
		$query = mysqli_query($koneksi, $sql);

		if ($query) {
			echo "berhasil";
			include "data_karyawan.php";
		}
		else {
			echo "cek kembali form anda
				<meta http-equiv='refresh' content='0; url=data_karyawan.php'>";
		}
}

?>