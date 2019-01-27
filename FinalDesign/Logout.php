<?php
/**
 * Created by PhpStorm.
 * User: Noor Ahmad Zafar
 * Date: 27-Jan-19
 * Time: 4:37 PM
 */

session_start();
session_destroy();
header('location:login.php');