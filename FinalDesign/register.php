<?php
require "Templates.php";

if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $dob = $_POST['dob'];


	if(strlen($pass1)<8 && strlen($pass2)<8) {
        echo '<script type="text/javascript">
				
			alert("enter password greater than 8");
			
		</script>';
    }
    else if($pass1!==$pass2)
	{
        echo '<script type="text/javascript">
			
			alert("passwords dont match");
			
		</script>';
	}
    else {

        $querryy = "select *from user";
        $checker = mysqli_query($con, $querryy);
        while ($row = mysqli_fetch_assoc($checker)) {
            if ($username === $row['username']) {
                echo '<script type="text/javascript">alert("Sorry this username is already taken");</script>';
                exit();
            } else if ($email === $row['email']) {
                echo '<script type="text/javascript">alert("Sorry this email is already taken");</script>';
                exit();
            }
        }


        $fileType = $_FILES['pro_img']['type'];
        $fileSize = $_FILES['pro_img']['size'];

        if ($fileSize / 1024 > '2048') {
            echo '<script type="text/javascript">alert("Sorry too large size");</script>';
            exit();
        } //FileSize Checking

        if ($fileType != 'image/png' &&
            $fileType != 'image/gif' &&
            $fileType != 'image/jpg' &&
            $fileType != 'image/jpeg'
        ) {
            echo '<script type="text/javascript">alert("Sorry this fomrat image not suported");</script>';
            exit();
        } //file type checking ends here.
        $upFile = './Images/' . date('Y_m_d_H_i_s') . $_FILES['pro_img']['name'];

        if (is_uploaded_file($_FILES['pro_img']['tmp_name'])) {
            if (!move_uploaded_file($_FILES['pro_img']['tmp_name'], $upFile)) {
                echo '<script type="text/javascript">alert("error try again later");</script>';
            } else {
                //insert query here

                $name = $fname . " " . $mname . " " . $lname;
                $insert_user = "insert into user (username,DateOfBirth,name,email,password,profilePicture) 
                  VALUES ('$username','$dob','$name','$email','$pass1','$upFile');";
                $insert_us = mysqli_query($con, $insert_user);
                if ($insert_us) {
                    header("location: " . $_SERVER['PHP_SELF']);
                }

            }
        }
    }
}
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
			<form name="Form" class="form-group form-container bg-warning" onsubmit="return validateForm()"
				  method="post" enctype="multipart/form-data">
				<h1 class="text-center"><i class="far fa-smile" style="font-size:150px;color:gray"></i></h1>
				<hr>
				<h4 class="text-center"><label>Enter Your Bio:<br></label></h4>
				<input pattern="^[a-zA-z]+$" type="text" class="form-control" name="fname" id="fname"
					   placeholder="First Name"
					   required>
				<br>
				<input pattern="^[a-zA-z]+$" type="text" class="form-control" name="mname" id="mname"
					   placeholder="Middle Name"
					   required>
				<br>
				<input pattern="^[a-zA-z]+$" type="text" class="form-control" name="lname" id="lname"
					   placeholder="Last Name"
					   required>
				<br>
				<input pattern="^[a-zA-z]+$" type="text" class="form-control" name="username" id="username"
					   placeholder="Username"
					   required>
				<br>
				<h4 class="text-center"><label>Enter Your Info:<br></label></h4>
				<input name="email" type="email" class="form-control" id="mail" placeholder="Your Email Address"
					   required>
				<input name="pass1" type="password" class="form-control" id="pass" placeholder="Your Password">
				<input name="pass2" type="password" class="form-control" id="passconfirm"
					   placeholder="Your Confirm Password" required>
				<br>
				<select class="form-control" id="pro_cat" name="pro_cat" required>
					<option>Your Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Transgendered</option>
				</select>
				<input name="dob" type="date" class="form-control" id="dob" placeholder="Date Of Birth" required>
				<br>
				<input class="form-control" type="file" accept="image/*" id="pro_img" name="pro_img" required>

				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="Check1" required>
					<small><label class="form-check-label form-text text-muted text-black-50" for="Check1">I AGREE TO
							TERMS</label></small>
				</div>
				<br>
				<button name="register" type="submit" class="btn btn-primary btn-block w-50 mx-auto">REGISTER NOW
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