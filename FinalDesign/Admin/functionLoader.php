<?php
/**
 * Created by PhpStorm.
 * User: Noor Ahmad Zafar
 * Date: 27-Jan-19
 * Time: 1:10 PM
 */

$x=$_REQUEST['e'];
if($x=="add"){
echo '<h1> ADD RECIPE</h1>
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
</div>';
}
else if($x==="delete"){
    echo'<h1> Delete Recipe</h1>
<div>
	<div class="container-fluid ">
		<div class="row justify-content-center">
			<div class="col-auto col-md-5 col-sm-6 col-lg-5 col-xl-4">
				<form method="get" class="form-container">
				<b> Recipe Name</b>: <input type="text" name="Rname">

				<br><br>

				<button type="submit" class="button" value="Submit"name="formdelete">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>';
}
else if($x==="update"){
    echo '<h1> Update Recipe</h1>
<div>
	<div class="container-fluid ">
		<div class="row justify-content-center">
			<div class="col-auto col-md-5 col-sm-6 col-lg-5 col-xl-4">
				<form class="form-container"method="get">
					<b> Recipe Name</b>: <input type="text" name="Rname">
					<br>
					<b> Recipe Name new</b>: <input type="text" name="Rnamenew">
					<textarea type="text" id="form7" class="md-textarea form-control" rows="3"
							  name="rnewdesc"></textarea>
					<br>
					<button type="submit" class="button" value="Submit" name="updater">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>';
}