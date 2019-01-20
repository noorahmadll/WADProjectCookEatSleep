<?php
/**
 * Created by PhpStorm.
 * User: Noor Ahmad Zafar
 * Date: 20-Jan-19
 * Time: 11:23 AM
 */
require "connection.php";
function Show_Footer()
{
    //<hr class="my-4">
    echo '<footer class="page-footer font-small indigo d-none d-lg-block d-xl-block ">
    <div class="footer-copyright text-center py-3 bg-warning">
        <img src="Images/appstore.png" style="width: 32vh;">
        <h5>© 2019 Copyrights: <a href=""> www.cookeatsleep.com</a></h5>
    </div></footer>';
}

function Search_Bar()
{
    echo '<div class="h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="sb">
            <input class="search_input" type="text" name="" placeholder="FIND ANY FOOD">
            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
    </div>
</div>';
}

function Show_Navbar()
{
    echo '<nav class="navbar navbar-expand-md navbar-light bg-light visible clearfix ">
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
					<a class="nav-link btn btn-outline-warning font-weight-bold" href="login.php">Login</a>
				</li>
				<h> </h>
				<li>
					<a class="nav-link btn btn-outline-warning font-weight-bold" href="register.php">Sign Up</a>
				</li>
			</ul>
		</div>
	</div>
</nav>';
}

function AboutPageinfo($textHeader1, $textDescription1, $textHeader2, $textDescription2)
{
    echo '<div class="row p-2">
		<div class="mx-auto col-12 col-lg-5 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">

			<h1 class="my-4">' . $textHeader1 . '</h1>
			<h6 class="text-justify p-3">' . $textDescription1 . '</h6>
		</div>
		<div class="mx-auto col-12 col-lg-5 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">
            <h1 class="my-4">' . $textHeader2 . '</h1>
			<h6 class="text-justify p-3">' . $textDescription2 . '</h6>
		</div>
	</div>';
}

function ContactInfo($iconName, $title, $description)
{
    echo '<div class="col-sm-3 col-xs-6 p-2">
                    <h1><span class="fas fa-' . $iconName . '" style="color: red"></span></h1>
                    <h3>' . $title . '</h3>
                    <p>' . $description . '</p><br>
                </div>';
}

function FastFoodList($imageName, $foodName)
{
    echo '<li ><a class=\'nav-link\' href=\'#\'><img src="Images/' . $imageName . '" class="d-block mx-auto w-25">' . $foodName . '</a></li>';
}

function Headerr($title, $bootstrap)
{
    echo '<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0">
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>CookEatSleep - ' . $title . '</title>
    <link rel="stylesheet" href="css/allinone.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';

    if ($bootstrap == 1)
        echo '<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js">';

    echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"></head>';
}

function ScriptTags()
{
    echo '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="js/index.js"></script>';
}