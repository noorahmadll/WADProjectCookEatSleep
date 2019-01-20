<?php
require "Templates.php"
?>

<!DOCTYPE html>
<html lang="en">
<?php
Headerr("Register", 0);
?>
<body>
<?php
Show_Navbar();
?>

<div class="container-fluid bg">
	<div class="row justify-content-center">
		<div class="col-auto col-md-5 col-sm-6 col-lg-5 col-xl-4">
			<form class="form-group form-container bg-warning">
				<h1 class="text-center"><i class="far fa-smile" style="font-size:150px;color:gray"></i></h1>
				<hr>
				<h4 class="text-center"><label>Enter Your Bio:<br></label></h4>
				<input type="text" class="form-control" id="fname" placeholder="First Name">
				<br>
				<input type="text" class="form-control" id="mname" placeholder="Middle Name">
				<br>
				<input type="text" class="form-control" id="lname" placeholder="Last Name">
				<br>
				<h4 class="text-center"><label>Enter Your Info:<br></label></h4>
				<input type="email" class="form-control" id="mail" placeholder="Your Email Address">
				<input type="password" class="form-control" id="pass" placeholder="Your Password">
				<input type="password" class="form-control" id="passconfirm" placeholder="Your Confirm Password">
				<br>
				<select class="form-control" id="pro_cat" name="pro_cat">
					<option>Your Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Transgendered</option>
				</select>
				<input type="date" class="form-control" id="dob" placeholder="Date Of Birth">
				<br>
				<input class="form-control" type="file" accept="image/png, image/jpeg" id="pro_img" name="pro_img">

				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="Check1">
					<small><label class="form-check-label form-text text-muted text-black-50" for="Check1">I AGREE TO
							TERMS</label></small>
				</div>
				<br>
				<button type="submit" class="btn btn-primary btn-block w-50 mx-auto">REGISTER NOW</button>
			</form>
		</div>
	</div>
</div>

<?php
Show_Footer();
ScriptTags();
?>

</body>
</html>
