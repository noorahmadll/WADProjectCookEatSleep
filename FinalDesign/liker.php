<?php
/**
 * Created by PhpStorm.
 * User: Noor Ahmad Zafar
 * Date: 28-Jan-19
 * Time: 7:52 PM
 */

require "connection.php";

$v=$_REQUEST['postid'];

$query= "update posts set Likes=Likes+1 where post_id=".$v.";";
echo $query;

$run=mysqli_query($con,$query);
if($run)
{header('location:Profile.php');}