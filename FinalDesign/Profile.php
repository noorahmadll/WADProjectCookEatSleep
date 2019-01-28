<?php
session_start();
require "Templates.php";
if(!isset($_SESSION['email'])){
    header('location: login.php?not_user=You are not logged in!');
}

if(isset($_POST['insert_post'])){
    //getting text data from the fields

		$recipename=$_POST['recipename'];
		$desc=$_POST['textbox'];
		$email=$_SESSION['email'];
		$query="select * from user where email='$email';";

		$runquery=mysqli_query($con,$query);
		$r=mysqli_fetch_assoc($runquery);
		$username=$r['username'];

echo $username;
    $fileType = $_FILES['pro_imger']['type'];
    $fileSize = $_FILES['pro_imger']['size'];
	$likes=0;
    if ($fileSize / 1024 > '2048') {
        echo '<script type="text/javascript">alert("Sorry too large size");</script>';
        exit();
    } //FileSize Checking

    if ($fileType != 'image/png' &&
        $fileType != 'image/gif' &&
        $fileType != 'image/jpg' &&
        $fileType != 'image/jpeg'
    ) {
        echo '<script type="text/javascript">alert("Sorry this format image not supported");</script>';
        exit();
    } //file type checking ends here.
    $upFile = 'Images/' . date('Y_m_d_H_i_s') . $_FILES['pro_imger']['name'];

    if (is_uploaded_file($_FILES['pro_imger']['tmp_name'])) {
        if (!move_uploaded_file($_FILES['pro_imger']['tmp_name'], $upFile)) {
            echo '<script type="text/javascript">alert("error try again later");</script>';
        } else {
            //insert query here
            $query="insert into posts (username,Likes,Recipe_Name,description_recipe,image) 
						values('$username','$likes','$recipename','$desc','$upFile');";

            $insert_us = mysqli_query($con, $query);
            if ($insert_us) {
                header("location: " . $_SERVER['PHP_SELF']);
            }
        }
    }


}

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

		<form class="form-container col-md-12" method="post" enctype="multipart/form-data">
			<h2>Post your recipe</h2>
			<div class="col-md-12">
				<input pattern="^[a-zA-Z0-9äöüÄÖÜ]*$" type="text" class="form-control" id="recipename" placeholder="Recipe Name" name="recipename">
			</div>
			<div class="col-md-12">
				<textarea pattern="^[a-zA-Z0-9äöüÄÖÜ]*$"placeholder="Recipe description" class="form-control"rows="4" cols="50" name="textbox"></textarea>
			</div>
			<div class="col-md-12">
				<input class="form-control" type="file" accept="image/png, image/jpeg" id="pro_img" name="pro_imger">
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