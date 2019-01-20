<?php
require "Templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php Headerr("home", 0); ?>
<body class="bg">

<nav class="navbar navbar-expand-md navbar-light bg-light visible clearfix ">
	<div class="container-fluid">
		<h1 class="h1"><a class="navbar-brand" href="index.php"><img src="Images/icon.ico" style="width: 20%;" >Cooking Guide</a></h1>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="Profile.php">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="contact.php">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="#">Nearby</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li>
					<a class="nav-link btn btn-outline-warning font-weight-bold" href="login.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<br>
<?php
Search_Bar();
?>
<br>

<div class="container">
	<div class="row">

		<form class="form-container col-md-12" method="post">
			<h2>Post your recipe</h2>
			<div class="col-md-12">
				<input pattern="^[a-zA-Z0-9äöüÄÖÜ]*$" type="text" class="form-control" id="recipename" placeholder="Recipe Name" name="recipename">
			</div>
			<div class="col-md-12">
				<textarea pattern="^[a-zA-Z0-9äöüÄÖÜ]*$"placeholder="Recipe description" class="form-control"rows="4" cols="50" name="textbox"></textarea>
			</div>
			<div class="col-md-12">
				<input class="form-control" type="file" accept="image/png, image/jpeg" id="pro_img" name="pro_img">
			</div>
			<button type="submit" class="btn btn-primary btn-block w-50 mx-auto">Post</button>
		</form>
	</div>
</div>

<br>
	<div class="container">
		<div class="row">
			<?php
			Load_Posts();
			?>
		</div>
	</div><!-- end container -->

<br><br><br>

<?php
ScriptTags();
?>
</body>
</html>