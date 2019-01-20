<?php
require "Templates.php";
?>


<!DOCTYPE html>
<html lang="en">
<?php
Headerr("Forgot Password", 0);
?>

<body>
<?php
Show_Navbar();
?>
<div class="container-fluid bg">
	<div class="row justify-content-center">
		<div class="col-auto col-md-6 col-sm-6 col-lg-5 col-xl-3 col-xs-6">
			<form class="form-group form-container">
				<h1 class="text-center"><i class="fas fa-cog" style="font-size:150px;color:gray"></i></h1>
				<hr>

				<h4><i class="fas fa-envelope"> </i> <label for="exampleInputEmail1">Recovery E-Mail</label></h4>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
					   placeholder="Recovery Email">
				<small id="emailHelp" class="form-text text-muted text-black-50">We will send you an email to reset your
					password.
				</small>
				<button type="submit" class="btn btn-primary btn-block"><a href="subcontact.php"
																		   class="btn btn-primary btn-block">Submit</a>
				</button>

				<h1 class="font-weight-bold text-center">OR</h1>

				<h4><i class="fas fa-mobile"> </i> <label for="">Contact</label></h4>
				<input type="tel" class="form-control" id="mobile" placeholder="Mobile Number">
				<small id="TextHelp" class="form-text text-muted text-black-50">We will send you a code in text
					message.
				</small>

				<button type="submit" class="btn btn-primary btn-block"><a href="subcontact.php"
																		   class="btn btn-primary btn-block">Submit</a>
				</button>
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
