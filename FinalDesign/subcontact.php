<?php
require "Templates.php"
?>

<!DOCTYPE html>
<html lang="en">
<?php
Headerr("Subcontact", 0);
?>
<body class="bg">
<?php
Show_Navbar();
?>
<br><br>

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-6 col-sm-6 col-lg-5 col-xl-3">
			<form class="form-group form-container bg-warning">
				<h6><label for="code">YOUR REQUEST FOR PASSWORD RESET HAS BEEN DONE SUCCESSFULLY.
						<br> YOU WILL SHORTLY RECEIVE TEXT MESSAGE FOR CODE </h5></label></h6>
				<input type="text" class="form-control" id="code" aria-describedby="code" placeholder="Code">
				<small id="" class="form-text text-muted text-black-50">We will verify through your code</small>
				<br>
				<button type="submit" class="btn btn-primary btn-block mx-auto w-50">CONFIRM</button>
				<br>
			</form>
		</div>
	</div>
</div>

<br><br>
<?php
Show_Footer();
ScriptTags();
?>


</body>
</html>
