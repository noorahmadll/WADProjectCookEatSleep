<?php
require "Templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php
Headerr("About", 0);
?>
<body>

<?php
Show_Navbar();
?>


<div class="bg">
	<br>
    <?php
    Search_Bar()
    ?>
	<br>

	<div class="container-fluid">
		<div class="row p-2">
			<div class="mx-auto col-12 col-lg-5 col-xs-4 bg-warning shadow-lg p-1 mb-1 ">
				<div class="list-unstyled components hide">
					<li class="active">
						<div href="#homeSubmenu" data-toggle="collapse" aria-expanded=""
							 class="dropdown-toggle nav-link text-center">
							<h1 class="my-4">What Makes Us Special</h1>
						</div>
						<div class="collapse list-unstyled" id="homeSubmenu">
							<h3 class="text-center">Haseeb</h3>
						</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid hoverable bg" style="">
        <?php
        $text1 = 'We provide our customers all the recipes that are not available in the market. So just start making new recipes
				that are rare to find. Our Customers are our wealth at end. Our Database has almost all the recipes from Chinese, Indian, American to Desi Continental depending upon your mood.';
        $text2 = 'By Registering into our site, you will be able access all the magical recipe that are quite hard to find and cook. One Click away
			and you are our precious member. You can further add your recipe, comment and review other users recipes as well. The terms and conditions are quite
			simple and you are free to register. You may donate us if you want to help us improve our services :)';
        AboutPageinfo("FIND DELICIOUS RECIPES", $text1, "BECOME OUR MEMBER", $text2);
        $text1 = "By Using Our Advanced Location services, users are able to find all nearby and within city restaurants and
			Food Shops like McDonalds, KFC, Burger King etc. So don't waste your time to google because you also get access to their menus as well over
			here. (in-development)";
        $text2 = "This idea is suggested by our group fellows. We, Haseeb, Noor and Adil thought there should be some website that allows
			users to help them in making food because we live on only on thing and that is for sure <em>food!</em>";
        AboutPageinfo("FIND NEARBY RESTAURANTS", $text1, "STARTUP", $text2);
        ?>
	</div>
	<br>
</div>
<?php
Show_Footer();
ScriptTags();
?>


</body>
</html>