<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align="center">Data Karyawan</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Pendidikan</th>
        <th>Divisi</th>
        <th colspan="3">Pilih</th>

      </tr>
    </thead>
    <tbody>

      <?php
        include "koneksi.php";
        $query = "select * from karyawan";
        $sql = mysqli_query($koneksi,$query);
        while ($data = mysqli_fetch_array($sql)) {
          //$id = $data['id'];
          $nama = $data['nama'];
          $alamat = $data['alamat'];
          $jenis_kelamin = $data['jenis_kelamin'];
          $pendidikan = $data['pendidikan'];
          $divisi = $data['divisi'];
      ?>
      <tr>
          <td><?php echo $nama; ?></td>
          <td><?php echo $alamat; ?></td>
          <td><?php echo $jenis_kelamin; ?></td>
          <td><?php echo $pendidikan; ?></td>
          <td><?php echo $divisi; ?></td>
          <td><a href="">Update</a></td>
          <td><a href="">Delete</a></td>
          <td><a href="">Create</a></td>
      </tr>
      <?php }?>
  </table>
</div>

</body>
</html>
