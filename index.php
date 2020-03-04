<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Sign In</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			padding: 60px 0 80px 0;
		    font-size: 18px;
		    font-weight: 300;
		    /*background-image: linear-gradient(to bottom right, #595959, #d9d9d9);*/
		    background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		    line-height: 30px;
		    text-align: center;
		}
		.form-box {
			width: 40%;
			padding: 25px 25px 30px 50px;
			background: #444;
			background: rgba(0, 0, 0, 0.3);
			-moz-border-radius: 0 0 4px 4px; -webkit-border-radius: 0 0 4px 4px; border-radius: 0 0 4px 4px;
			text-align: left;
		}
		/*label, legend, h1 {
			color: white;
		}*/
	</style>
</head>
<body>
	<center><div class="form-box">
		<h1 style="text-align:center;">Please Sign In</h1><br>
		<form action="proseslogin.php" method="post">
	  		<div class="form-group row">
	    		<label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
	    		<div class="col-sm-7">
	      			<input id="inputUsername" type="text" class="form-control" name="username">
	    		</div>
	  		</div>
	  		<div class="form-group row">
	    		<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
	    		<div class="col-sm-7">
	      			<input id="inputPassword" type="password" class="form-control" name="password">
	    		</div>
	  		</div>
	  		<div class="form-group row">
	    		<div class="col-sm-8">
	      			<button type="submit" class="btn btn-primary">Sign In</button>
	    		</div>
	  		</div>
		</form>
	</div></center>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>