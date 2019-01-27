<?php
/**
 * Created by PhpStorm.
 * User: Noor Ahmad Zafar
 * Date: 27-Jan-19
 * Time: 12:38 PM
 */
session_start();
require "../connection.php";

if(!isset($_SESSION['user_email'])){
    header('location: LoginAdmin.php?not_admin=You are not Admin!');
}

if (isset($_GET['AdminInsert'])) {
    $title = $_GET['Rname'];
    $description = $_GET['recipedesc'];

    $insert_product = "insert into recipes (Recipe_Name,Recipe_Description) 
                  VALUES ('$title','$description');";
    $insert_pro = mysqli_query($con, $insert_product);
    if ($insert_pro) {
        header("location: " . $_SERVER['PHP_SELF']);
    }
}

if (isset($_GET['formdelete'])) {


    $title = $_GET['Rname'];


    $delete_product = "Delete from recipes where Recipe_Name= '$title';";
    $delete_pro = mysqli_query($con, $delete_product);
    if ($delete_pro) {
        header("location: " . $_SERVER['PHP_SELF']);
    }


}
if (isset($_GET['updater'])) {
    $oldtitle = $_GET['Rname'];
    $newtitle = $_GET['Rnamenew'];
    $newdesc = $_GET['rnewdesc'];
    $update_product = "update recipes set Recipe_Name='$newtitle',Recipe_Description='$newdesc' where Recipe_Name='$oldtitle';";
    $update_pro = mysqli_query($con, $update_product);
    if ($update_pro) {
        header("location: " . $_SERVER['PHP_SELF']);
    }
}
?>
<!DOCTYPE HTML>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0">
	<meta name="description" content=""/>
	<meta name="author" content=""/>
	<title>Cooking Guide - Welcome</title>
	<link rel="stylesheet" href="../css/allinone.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		  integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<script>
        function load(str) {
            var obj = new XMLHttpRequest();
            obj.onreadystatechange = function () {
                if (obj.readyState == 4 && obj.status == 200) {
                    document.getElementById("filter").innerHTML = this.responseText;
                }
            };

            obj.open("GET", "functionLoader.php?e=" + str);
            obj.send();

        }
	</script>
</head>

<body>
<div class="text-center list-group">

	<h2 class="active list-group-item">Welcome Admin</h2>

</div>
<div class="container-fluid" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<p href="#" class="list-group-item list-group-item-action active">Services</p>

				<div class="list-group-item" onmouseup="load('add')">
					Add Recipe
				</div>
				<div class="list-group-item" onmouseup="load('delete')">
					Delete Recipe
				</div>
				<div class="list-group-item" onmouseup="load('update')">
					Update Recipe
				</div>

				<a href="Logout.php" class="list-group-item list-group-item-action active justify-content-between">
					Logout
				</a>

			</div>
		</div>
		<div class="col-md-9">
			<div class="page-header" id="filter">

			</div>
		</div>
	</div>
</div>
</body>




