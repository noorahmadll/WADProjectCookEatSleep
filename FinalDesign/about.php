<?php
	require "Templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0"> <!-- корректное отображение на мобильных устройствах, отмена масштабирования -->
	<meta name="description" content=""/>
	<meta name="author" content=""/>
	<title>CookEatSleep - About</title>
	<link rel="stylesheet" href="css/allinone.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

<?php
	Show_Navbar();
?>


<br>
<div class="h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="sb">
			<input class="search_input" type="text" name="" placeholder="FIND ANY FOOD">
			<a href="#" class="search_icon"><i class="fas fa-search"></i></a>
		</div>
	</div>
</div>
<br><br>

<div class="container-fluid">
	<div class="row p-2">
		<div class="mx-auto col-12 col-lg-5 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">
			<div class="list-unstyled components hide">
				<li class="active">
					<div href="#homeSubmenu" data-toggle="collapse" aria-expanded="" class="dropdown-toggle nav-link text-center">
						<h1 class="my-4">What Makes Us Special</h1>
					</div>
					<div class="collapse list-unstyled" id="homeSubmenu">
						<h3 class="text-center">Haseeb</h3>
					</div>
			</div>
		</div>
</div>
</div>

<div class="container-fluid hoverable" style="">
	<div class="row p-2">
		<div class="mx-auto col-12 col-lg-5 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">

			<h1 class="my-4">FIND DELICIOUS RECIPES</h1>
			<h6 class="text-justify p-3">We provide our customers all the recipes that are not available in the market. So just start making new recipes
				that are rare to find. Our Customers are our wealth at end. Our Database has almost all the recipes from Chinese, Indian, American to Desi Continental depending upon your mood.</h6>
		</div>


		<div class="mx-auto col-12 col-lg-5 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">
			<h1 class="my-4">BECOME OUR MEMBER</h1>
			<h6 class="text-justify p-3">By Registering into our site, you will be able access all the magical recipe that are quite hard to find and cook. One Click away
			and you are our precious member. You can further add your recipe, comment and review other users recipes as well. The terms and conditions are quite
			simple and you are free to register. You may donate us if you want to help us improve our services :)</h6>
		</div>
	</div>

	<div class="row p-2">
		<div class="mx-auto col-12 col-lg-5 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">

			<h1 class="my-4">FIND NEARBY RESTAURANTS</h1>
			<h6 class="text-justify p-3">By Using Our Advanced Location services, users are able to find all nearby and within city restaurants and
			Food Shops like McDonalds, KFC, Burger King etc. So don't waste your time to google because you also get access to their menus as well over
			here. (in-development)</h6>
		</div>

		<div class="mx-auto col-12 col-lg-5 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">
			<h1 class="my-4">STARTUP </h1>
			<h6 class="text-justify p-3">This idea is suggested by our group fellows. We, Haseeb, Noor and Adil thought there should be some website that allows
			users to help them in making food because we live on only on thing and that is for sure <em>food!</em></h6>
		</div>
</div>
</div>
<br><br>
<footer class="page-footer font-small indigo d-none d-lg-block d-xl-block ">

	<?php
		Show_Footer();
	?>

</footer>






<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Custom JS -->
<script src="js/index.js"></script>
</body>
</html>
