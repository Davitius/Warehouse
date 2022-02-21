<?php
error_reporting(E_ERROR);
require_once '../connect.php';
ob_start();




if (!$connect)
{
    die ('ბაზასთან კავშირის შეცდომა');
}


$prname = "";
$prprice = 0;
$prquant = 0;
$userkookie = $_COOKIE['wareh_userr'];




$query = "UPDATE `wareh_users` SET
    `pr10name`='".$prname."',
    `pr10price`='".$prprice."',
    `pr10quant`='".$prquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());




   header('Location: ../../goods.php#tab_01');

$connection->close();

?>








