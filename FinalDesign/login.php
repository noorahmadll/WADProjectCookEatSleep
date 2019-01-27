<?php

session_start();
require "Templates.php";
$error_msg = '';
if (isset($_POST['login'])) {

    $email = $_POST['user'];
    $pass = $_POST['pass'];
    $sel_user = "select * from user where email='$email' AND password='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['email'] = $email;
        if(!empty($_POST['remember'])) {
            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('user_email','' );
            setcookie('user_pass', '');
        }
        header('location:Profile.php');
    }

//	$user=$_POST['user'];
//	$pass=$_POST['pass'];
//
//    $querryy = "select *from user";
//    $checker = mysqli_query($con, $querryy);
//    while ($row = mysqli_fetch_assoc($checker)) {
//        if (($user === $row['username'] || $user === $row['email']) && $pass ===$row['password']) {
//            $url="./Profile.php";
//            header('Location: '.$url);
//        }
//    }
//    echo '<script>alert("wrong username or password or both");</script>';


}



?>

<!DOCTYPE html>
<html lang="en">
<?php
Headerr("login", 0)
?>
<body class="bg">
<?php
Show_Navbar();
?>

<div>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 col-sm-6 col-lg-5 col-xl-4">

				<form class="form-group form-container bg-warning" method="post">
                    <?php echo $error_msg;?>
                    <?php echo @$_GET['not_user'];?>
					<h1 class="text-center"><i class="fas fa-user-circle" style="font-size:150px;color:gray"></i></h1>
					<hr>
					<h4 class="text-center"><i class="fas fa-envelope"></i> <label for="exampleInputEmail1">Email
							address</label></h4>
					<input class="form-control control-label" id="exampleInputEmail1"
						   aria-describedby="emailHelp" placeholder="Email or Username" name="user">
					<small id="emailHelp" class="form-text text-muted text-black-50 text-center">OUR INFORMATION IS
						SECRET.
					</small>
					<br>
					<h4 class="text-center"><i class="fas fa-key"></i> <label
								for="exampleInputPassword1">Password</label></h4>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass"><br>
					<a class="text-sm-center text-center text-danger" href="forget.php" target="_blank">Forgot your
						Password? </a><br><br>
					<button type="submit" class="btn btn-primary btn-block mx-auto w-50"name="login">LOG IN</button>
					<br>
					<button class="btn btn-block"><a class="text-center" href="register.php" target="_blank" >REGISTER
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
