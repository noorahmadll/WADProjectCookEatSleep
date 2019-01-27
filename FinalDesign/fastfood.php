<?php
require "Templates.php";
?>

<!DOCTYPE html>
<html lang="en">


<?php
Headerr("Fast food", 0);
?>

<body>
<?php

if(isset($_SESSION['email'])){
    Show_Navbar_L();
}
else Show_Navbar();
?>

<div class="bg">
	<br>
    <?php
    Search_Bar();
    ?>
	<br>
	<div class="container-fluid">
		<div class="row p-2">
			<div class="mx-auto col-12 col-lg-6 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">
				<div class="list-unstyled components hide">
					<li class="active">
						<div href="#homeSubmenu" data-toggle="collapse" aria-expanded=""
							 class="dropdown-toggle nav-link text-center">
							<h1 class="my-4">Select your food type</h1>
						</div>
						<ul class="collapse list-unstyled list-inline text-center row" id="homeSubmenu">

                            <?php
                            FastFoodList("burger.png", "Burger");
                            FastFoodList("wrap.png", "Burger");
                            FastFoodList("sandwich.png", "Sanwiches");
                            FastFoodList("chicken.png", "Chicken");
                            FastFoodList("pizza.png", "Pizza");
                            ?>

						</ul>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br><br>
</div>
<?php Show_Footer();
ScriptTags(); ?>


</body>
</html>