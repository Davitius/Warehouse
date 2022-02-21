<?php
error_reporting(E_ERROR);
require_once '../php/connect.php';
ob_start();


if (!$connect)
{
    die ('ბაზასთან კავშირის შეცდომა');
}

$name_id = $_GET['id'];
$user = mysqli_query($connect, "SELECT * FROM wareh_goods1 WHERE id = '$name_id'");
$user = mysqli_fetch_assoc($user);
//<?= $user['category']


$prname = $user['name'];
$prprice = $user['price'];
$wprquant = $user['quantity'];
//$prquant = $user['quantity'];
$userkookie = $_COOKIE['wareh_userr'];



$cart = mysqli_query($connect, "SELECT * FROM wareh_users WHERE user = '$userkookie'");
$cart = mysqli_fetch_assoc($cart);
$pr1name = $cart['pr1name'];
$pr2name = $cart['pr2name'];
$pr3name = $cart['pr3name'];
$pr4name = $cart['pr4name'];
$pr5name = $cart['pr5name'];
$pr6name = $cart['pr6name'];
$pr7name = $cart['pr7name'];
$pr8name = $cart['pr8name'];
$pr9name = $cart['pr9name'];
$pr10name = $cart['pr10name'];



if($pr1name == ""){
$query = "UPDATE `wareh_users` SET
    `pr1name`='".$prname."',
    `pr1price`='".$prprice."',
    `wpr1quant`='".$wprquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}
if($pr2name == "" && $pr1name != ""){
$query = "UPDATE `wareh_users` SET
    `pr2name`='".$prname."',
    `pr2price`='".$prprice."',
    `wpr2quant`='".$wprquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}

if($pr3name == "" && $pr1name != "" && $pr2name != ""){
$query = "UPDATE `wareh_users` SET
    `pr3name`='".$prname."',
    `pr3price`='".$prprice."',
    `wpr3quant`='".$wprquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}

if($pr4name == "" && $pr1name != "" && $pr2name != "" && $pr3name != ""){
$query = "UPDATE `wareh_users` SET
    `pr4name`='".$prname."',
    `pr4price`='".$prprice."',
    `wpr4quant`='".$wprquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}

if($pr5name == "" && $pr1name != "" && $pr2name != "" && $pr3name != "" && $pr4name != ""){
$query = "UPDATE `wareh_users` SET
    `pr5name`='".$prname."',
    `pr5price`='".$prprice."',
    `wpr5quant`='".$wprquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}
if($pr6name == "" && $pr1name != "" && $pr2name != "" && $pr3name != "" && $pr4name != ""  && $pr5name != ""){
$query = "UPDATE `wareh_users` SET
    `pr6name`='".$prname."',
    `pr6price`='".$prprice."',
    `wpr6quant`='".$wprquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}
if($pr7name == "" && $pr1name != "" && $pr2name != "" && $pr3name != "" && $pr4name != ""  && $pr5name != ""  && $pr6name != ""){
$query = "UPDATE `wareh_users` SET
    `pr7name`='".$prname."',
    `pr7price`='".$prprice."',
    `wpr7quant`='".$wprquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}
if($pr8name == "" && $pr1name != "" && $pr2name != "" && $pr3name != "" && $pr4name != ""  && $pr5name != ""  && $pr6name != ""  && $pr7name != ""){
$query = "UPDATE `wareh_users` SET
    `pr8name`='".$prname."',
    `pr8price`='".$prprice."',
    `wpr8quant`='".$wprquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}
if($pr9name == "" && $pr1name != "" && $pr2name != "" && $pr3name != "" && $pr4name != ""  && $pr5name != ""  && $pr6name != ""  && $pr7name != ""  && $pr8name != ""){
$query = "UPDATE `wareh_users` SET
    `pr9name`='".$prname."',
    `pr9price`='".$prprice."',
    `wpr9quant`='".$wprquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}
if($pr10name == "" && $pr1name != "" && $pr2name != "" && $pr3name != "" && $pr4name != ""  && $pr5name != ""  && $pr6name != ""  && $pr7name != ""  && $pr8name != ""  && $pr9name != ""){
$query = "UPDATE `wareh_users` SET
    `pr10name`='".$prname."',
    `pr10price`='".$prprice."',
    `wpr10quant`='".$wprquant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}


if($query_run)
    {
        ob_end_clean();
        header('Location: ../goods.php#tab_01');
        exit();
    }
    else
    {
        echo "მონაცემები არ განახლდა";
    }
$connection->close();
?>
