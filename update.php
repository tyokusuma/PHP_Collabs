<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Update Data</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			padding: 60px 0 80px 0;
		    font-size: 18px;
		    font-weight: 300;
		    background-image: linear-gradient(to bottom right, #595959, #d9d9d9);
		    background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		    line-height: 30px;
		    text-align: center;
		}
		.form-box {
			margin-top: 50px auto;
			width: 85%;
			padding: 25px 25px 30px 25px;
			background: #444;
			background: rgba(0, 0, 0, 0.3);
			-moz-border-radius: 0 0 4px 4px; -webkit-border-radius: 0 0 4px 4px; border-radius: 0 0 4px 4px;
			text-align: left;
		}
		label, legend, h1 {
			color: white;
		}
	</style>
</head>
<body>

	<?php
			include "koneksi.php";
			
			$id = $_GET['id'];
			$query = "select * from karyawan where id = '$id'";
			$sql = mysqli_query($koneksi,$query);
			while ($data = mysqli_fetch_array($sql)) {
				$id = $data['id'];
				$nama = $data['nama'];
				$alamat = $data['alamat'];
				$jenis_kelamin = $data['jenis_kelamin'];
				$pendidikan = $data['pendidikan'];
				$divisi = $data['divisi'];
	?>

	<center><div class="form-box">
		<h1 style="text-align:center;">Create Data</h1><br>
		<form action="proses_update.php" method="post">
	      	<input id="inputID" type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
	  		<div class="form-group row">
	    		<label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
	    		<div class="col-sm-10">
	      			<input id="inputNama" type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
	    		</div>
	  		</div>
	  		<div class="form-group row">
	    	<label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
	    		<div class="col-sm-10">
	      			<textarea id="inputAlamat" class="form-control" name="alamat" rows="3"><?php echo $alamat ?></textarea>
	    		</div>
	  		</div>
	  		<fieldset class="form-group">
	    		<div class="row">
	      			<legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
	      			<div class="col-sm-10">
	        			<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="inputJenisKelamin1" name="jenis_kelamin" class="custom-control-input" <?php if ($jenis_kelamin ==="Pria") {echo "Checked";} ?> value="Pria">
  							<label class="custom-control-label" for="inputJenisKelamin1">Pria</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
  							<input type="radio" id="inputJenisKelamin2" name="jenis_kelamin" class="custom-control-input" <?php if ($jenis_kelamin ==="Wanita") {echo "Checked";} ?> value="Wanita">
  							<label class="custom-control-label" for="inputJenisKelamin2">Wanita</label>
						</div>
	        		</div>
	    		</div>
	  		</fieldset>
	  		<div class="form-group row">
	    		<label for="inputPendidikan" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
	    		<div class="col-sm-10">
	      			<input id="inputPendidikan" type="text" class="form-control" name="pendidikan" value="<?php echo $pendidikan ?>">
	    		</div>
	  		</div>
	  		<div class="form-group row">
	    		<label for="inputDivisi" class="col-sm-2 col-form-label">Divisi</label>
	    		<div class="col-sm-10">
	      			<input id="inputDivisi" type="text" class="form-control" name="divisi" value="<?php echo $divisi ?>">
	    		</div>
	  		</div>
	  		<div class="form-group row">
	    		<div class="col-sm-10">
	      			<button type="reset" class="btn btn-light">Reset</button>
	      			<button type="submit" class="btn btn-primary">Submit</button>
	    		</div>
	  		</div>
		</form>
	</div></center>
	
	<?php }?>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>