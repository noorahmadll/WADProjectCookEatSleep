<?php
session_start();
require "Templates.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
Headerr("Contact", 0);
?>


<body>

<?php

if(isset($_SESSION['email'])){
    Show_Navbar_L();
}
else Show_Navbar();
?>
<div class="bg">
	<br><br>


	<div class="container-fluid hoverable">
		<div class="row p-2">
			<div class="mx-auto col-lg-7 shadow-lg shadow-md shadow-sm bg-warning">
				<h1 class="my-4">MEET OUR MEMEBRS</h1>
				<hr>
				<h4 class="text-justify p-3 text-center"> BLOCK-A MAIN BOULEVARD <br> PHASE 2
					<br> PCSIR HOSUING SOCIETY <br> LAHORE, PAKISTAN</h4>
			</div>
		</div>
	</div>

	<div class="container-fluid hoverable" style="">
		<div class="row p-2">
			<div class="mx-auto col-lg-7 shadow-lg shadow-md shadow-sm bg-warning">
				<br>
				<div class="row text-center">
                    <?php
                    ContactInfo("phone", "Phone", "+92 315 0722892");
                    ContactInfo("home", "Location", ">A-BLOCK PCSIR2");
                    ContactInfo("at", "E-mail", "cookeatsleep@gmail.com");
                    ContactInfo("globe", "Web", "www.cookeatsleep.com");
                    ?>
				</div>
			</div>
		</div>
	</div>
	<br><br>
</div>
<?php Show_Footer();
ScriptTags(); ?>

</body>
</html>