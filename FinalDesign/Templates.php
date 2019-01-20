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
					<a class="nav-link active" href="contact.html">Contact</a>
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