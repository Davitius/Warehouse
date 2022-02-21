<?php
error_reporting(E_ERROR);
$category = $_POST['category'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$description = $_POST['description'];
$comment = $_POST['comment'];
$sale = $_POST['sale'];
$supplier = $_POST['supplier'];

if(!empty($_FILES['goodsimg']['tmp_name']))
$goodsimg = addslashes(file_get_contents($_FILES['goodsimg']['tmp_name']));



    $mysql = new mysqli('localhost', 'root', 'root', 'projectsdb');
$result = $mysql->query("SELECT * FROM `wareh_goods1` WHERE `name` = '$name'");
$userr = $result->fetch_assoc();

if(!$userr || count($userr) ==0)
{
$mysql->query("INSERT INTO `wareh_goods1`
(`name`,
`quantity`,
`price`,
`description`,
`comment`,
`sale`,
`supplier`,
`goodsimg`,
`category`)
VALUES
('$name',
'$quantity',
'$price',
'$description',
'$comment',
'$sale',
'$supplier',
'$goodsimg',
'$category')");
$mysql->close();
header('Location: ../php/errors/goodsregconfirm.php');
    }
else{
   header('Location: ../php/errors/goodserror1.php');
}
?>
