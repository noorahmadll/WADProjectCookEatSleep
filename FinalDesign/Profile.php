<?php
session_start();
require "Templates.php";
if(!isset($_SESSION['email'])){
    header('location: login.php?not_user=You are not logged in!');
}
//if(isset($_POST['insert_post'])){
//    //getting text data from the fields
//
//
////    $post_username=;
////    $Likes=$_POST['pro_title'];
////    $recipename=$_POST['pro_title'];
////    $desciption=$_POST['pro_title'];
////    $image=$_POST['pro_img']['name'];
//
//
//}

?>
<!DOCTYPE html>
<html lang="en">
<?php Headerr("home", 0); ?>
<body class="bg">
<?php

if(isset($_SESSION['email'])){
    Show_Navbar_L();
}
else Show_Navbar();
?>

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
			<button name="insert_post"type="submit" class="btn btn-primary btn-block w-50 mx-auto">Post</button>
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