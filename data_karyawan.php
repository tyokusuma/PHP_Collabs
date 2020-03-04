<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style type="text/css">

    body {
      background-color: grey;
    }

    header {
      padding: 30px;
      text-align: center;
      font-size: 35px;
      color: black;
    }

    table {
      background: white;
      text-align: center; 
    }

  </style>
</head>
<body>

  <header>
    <h2 align="center">Data Karyawan</h2>
  </header>

  <div class="container">
    <table class="table">
      <thead class="thead-dark">
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
