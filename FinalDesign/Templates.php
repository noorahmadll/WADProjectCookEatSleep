<?php
/**
 * Created by PhpStorm.
 * User: Noor Ahmad Zafar
 * Date: 20-Jan-19
 * Time: 11:23 AM
 */

function Show_Footer()
{
    echo '<hr class="my-4">
    <div class="footer-copyright text-center py-3 bg-warning">
        <img src="Images/appstore.png" style="width: 32vh;">
        <h5>© 2019 Copyrights: <a href=""> www.cookeatsleep.com</a></h5>
    </div>';
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
function Show_Navbar(){
    echo '<nav class="navbar navbar-expand-md navbar-light bg-light visible clearfix ">
	<div class="container-fluid">
		<h1 class="h1"><a class="navbar-brand" href="index.html"><img src="Images/icon.ico" style="width: 20%;" >Cooking Guide</a></h1>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="Profile.html">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="contact.php">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="Profile.html">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="Profile.html">Nearby</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li>
					<a class="nav-link btn btn-outline-warning font-weight-bold" href="login.html">Login</a>
				</li>
				<h> </h>
				<li>
					<a class="nav-link btn btn-outline-warning font-weight-bold" href="register.html">Sign Up</a>
				</li>
			</ul>
		</div>
	</div>
</nav>';
}


function AboutPageinfo($textHeader1,$textDescription1,$textHeader2,$textDescription2){
    echo '<div class="row p-2">
		<div class="mx-auto col-12 col-lg-5 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">

			<h1 class="my-4">'.$textHeader1.'</h1>
			<h6 class="text-justify p-3">'.$textDescription1.'</h6>
		</div>
		<div class="mx-auto col-12 col-lg-5 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">
            <h1 class="my-4">'.$textHeader2.'</h1>
			<h6 class="text-justify p-3">'.$textDescription2.'</h6>
		</div>
	</div>';
}

function ContactInfo($iconName,$title,$description)
{
    echo '<div class="col-sm-3 col-xs-6 p-2">
                    <h1><span class="fas fa-'.$iconName.'" style="color: red"></span></h1>
                    <h3>'.$title.'</h3>
                    <p>'.$description.'</p><br>
                </div>';
}