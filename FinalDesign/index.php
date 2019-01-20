<?php
	require "Templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php
	Headerr("Welcome",0);
?>
<body class="bg">
<?php Show_Navbar(); ?>
<br>
<?php Search_Bar();?>
<br>
<div id="carouselExampleIndicators" class="container carousel slide bg-warning col-lg-7 shadow-lg shadow-md shadow-sm" data-ride="carousel">
	<h1>PLEASE SELECT YOUR TYPE OF FOOD</h1><br>
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block mx-auto w-50" src="Images/fastfood.png" alt="First slide">
			<figcaption class="figure-caption text-center font-weight-bold"><a class="nav-link" href="fastfood.php"><h3>FAST FOOD</h3></a></figcaption>
		</div>
		<div class="carousel-item">
			<img class="d-block mx-auto w-50" src="Images/icecream.png" alt="Second slide">
			<figcaption class="figure-caption text-center font-weight-bold"><h3>DESSERTS</h3></figcaption>
		</div>
		<div class="carousel-item">
			<img class="d-block mx-auto w-50" src="Images/vegetables.png" alt="Third slide">
			<figcaption class="figure-caption text-center font-weight-bold"><h3>HOME ITEMS</h3></figcaption>
		</div>
	</div>
	<br><br>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<br>


<?php Show_Footer(); ScriptTags();?>

</body>
</html>
