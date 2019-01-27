<?php
session_start();
include "../connection.php";
$error_msg = '';
if(isset($_POST['login'])){
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];
    $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['user_email'] = $email;
        if(!empty($_POST['remember'])) {
            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('user_email','' );
            setcookie('user_pass', '');
        }
        header('location:WelcomeAdmin.php?logged_in=You have successfully logged in!');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0">
	<link rel="stylesheet" href="../css/allinone.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		  integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Admin Login</title>
</head>
<body class="text-center">

<form class="login_form form-container" method="post">
	<h2 class="text-danger"><?php echo @$_GET['not_admin']?></h2>
	<h2 class="text-primary"><?php echo @$_GET['logged_out']?></h2>
	<h3 class="m-3">Admin Login </h3>
	<div><?php echo $error_msg;?></div>
	<input type="text" id="user_email" name="user_email"
		   value="<?php echo @$_COOKIE['user_email']?>" class="form-control" placeholder="Email address" required autofocus>
	<input type="password" id="user_pass" name="user_pass"
		   value="<?php echo @$_COOKIE['user_pass']?>" class="form-control" placeholder="Password" required><br>
	<div class="form-check">
		<input type="checkbox" class="form-check-input" id="remember" name="remember">
		<label class="form-check-label" for="remember">Remember me</label>
	</div>
	<input class="btn btn-lg btn-primary mt-3" type="submit" name="login" value="Sign in">
</form>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>



