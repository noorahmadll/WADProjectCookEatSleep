<?php
require "Templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php
Headerr("login", 0)
?>
<body class="">
<?php
Show_Navbar();
?>

<div class="bg">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 col-sm-6 col-lg-5 col-xl-4">
				<form class="form-group form-container bg-warning">
					<h1 class="text-center"><i class="fas fa-user-circle" style="font-size:150px;color:gray"></i></h1>
					<hr>
					<h4 class="text-center"><i class="fas fa-envelope"></i> <label for="exampleInputEmail1">Email
							address</label></h4>
					<input type="email" class="form-control control-label" id="exampleInputEmail1"
						   aria-describedby="emailHelp" placeholder="Email or Username">
					<small id="emailHelp" class="form-text text-muted text-black-50 text-center">OUR INFORMATION IS
						SECRET.
					</small>
					<br>
					<h4 class="text-center"><i class="fas fa-key"></i> <label
								for="exampleInputPassword1">Password</label></h4>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"><br>
					<a class="text-sm-center text-center text-danger" href="forget.php" target="_blank">Forgot your
						Password? </a><br><br>
					<button type="submit" class="btn btn-primary btn-block mx-auto w-50">LOG IN</button>
					<br>
					<button class="btn btn-block"><a class="text-center" href="register.php" target="_blank">REGISTER
							NOW FOR FREE</a></button>
				</form>
			</div>
		</div>
	</div>
	<br>
</div>
<?php
Show_Footer();
ScriptTags();
?>

</body>
</html>
