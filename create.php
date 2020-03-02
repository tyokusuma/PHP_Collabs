<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<meta charset="UTF-8">
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background-color: #000000;
		}
		.box{
			width: 350px;
			margin: 10px auto;
			padding: 30px;
			background-color: white;
			border-radius: 5px;
			border: 1px solid #c5c4c4;
			color: #5a5757
		}
		.active, input[type='text']{
			width: 350px;
			height: 35px;
			margin: 10px 0 0 0;
			border-radius: 3px;
			background-color: #efefef;
		}
		input{
			height: 30px;
			width: 60px;
			border-radius: 3px;
		}
		input[type='radio']{
			height: 20px;
			width: 60px;
			border-radius: 3px;
		}
		textarea{
			width: 350px;
			height: 35px;
			margin: 10px 0 0 0;
			border-radius: 3px;
			background-color: #efefef;
		}
	</style>
</head>
<body>
	<form action="prosescreate.php" method="post">
	<div class="box">
		<center><h2>Create Data</h2></center>
		<h3>Nama</h3>
		<input class="active" name="nama" type="text"><br><br>
		<h3>Alamat</h3>
		<textarea name="alamat"></textarea><br><br>
		<h3>Jenis Kelamin</h3> <br>
		<input type="radio" name="jeniskelamin" value="pria">Pria
		<input type="radio" name="jeniskelamin" value="wanita">Wanita <br><br>
		<h3>Pendidikan Terakhir</h3>
		<input class="active" name="pendidikan" type="text"><br><br>
		<h3>Divisi</h3>
		<input class="active" name="divisi" type="text"><br><br>
		<br><br>
		<center><input type="submit" value="Submit"></center>
	</div>	
	</form>
</body>
</html>