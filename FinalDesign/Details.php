<?php
/**
 * Created by PhpStorm.
 * User: Noor Ahmad Zafar
 * Date: 30-Jan-19
 * Time: 9:04 PM
 */

require "Templates.php";


?>
<!DOCTYPE HTML>

<html>
    <?php Headerr("Details",0);?>
</html>

<body style="background-color: azure;">
    <?php

    $r=$_REQUEST['recipename'];
    $d=$_REQUEST['desc'];

    echo '<h1>'.$r.'</h1>
    <p>'.$d.'</p>';
    ?>

</body>

