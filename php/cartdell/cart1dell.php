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
    `pr1name`='".$prname."',
    `pr1price`='".$prprice."',
    `pr1quant`='".$prquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());




      ob_end_clean();
   header('Location: ../../goods.php#tab_01');
       exit();

$connection->close();

?>








