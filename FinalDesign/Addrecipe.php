<?php
require "../Templates.php";

if(isset($_GET['AdminInsert'])){


$title=$_GET['Rname'];
$description=$_GET['recipedesc'];

    $insert_product = "insert into recipes (Recipe_Name,Recipe_Description) 
                  VALUES ('$title','$description');";
    $insert_pro = mysqli_query($con, $insert_product);
    if($insert_pro){
        header("location: ".$_SERVER['PHP_SELF']);
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0">
	<meta name="description" content=""/>
	<meta name="author" content=""/>
	<title>Cooking Guide - Welcome</title>
	<link rel="stylesheet" href="../css/allinone.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="bg">

<h1> ADD RECIPE</h1>
<div>
	<div class="container-fluid ">
		<div class="row justify-content-center">
			<div class="col-auto col-md-5 col-sm-6 col-lg-5 col-xl-4">
				<form class="form-container" method="get">
					<b> Recipe Name:</b>
					<input type="text" name="Rname">
					<br>
					<textarea name="recipedesc"placeholder="desccription" type="text" id="form7" class="md-textarea form-control"
							  rows="3"></textarea>
					<br>
					<button type="submit" class="button" value="Submit" name="AdminInsert">Submit</button>

				</form>
			</div>
		</div>
	</div>
</div>
</body>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Custom JS -->
<script src="js/index.js"></script>
</body>
</html>
