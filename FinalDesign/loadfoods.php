<?php
/**
 * Created by PhpStorm.
 * User: Noor Ahmad Zafar
 * Date: 28-Jan-19
 * Time: 7:30 PM
 */


require "connection.php";


$val=$_REQUEST['e'];
$query="select *from recipes where Recipe_Name='$val';";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($res)) {
    $x=substr($row['Recipe_Description'],0,30);
    echo '<div class="col-md-3" style="background-color: azure;">
				<div class="single-content">
					<h3><i class="fa fa-utensils"></i> ' . $row['Recipe_Name'] . '</h3>
					<p>
                        ' . $x . '...<br><a target="_blank" href="Details.php?recipename='.$row['Recipe_Name'].'&desc='.$row['Recipe_Description'].'">Details</a>
					</p>
					<br>					
				</div>
			</div>';
}