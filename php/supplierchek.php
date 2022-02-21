<?php
error_reporting(E_ERROR);

$supplier = $_POST['supplier'];
$organization = $_POST['organization'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$position = $_POST['position'];
$priority = $_POST['priority'];
$personalnumber = $_POST['personalnumber'];
$address = $_POST['address'];
$location = $_POST['location'];


$mysql = new mysqli('localhost', 'root', 'root', 'projectsdb');
$result = $mysql->query("SELECT * FROM `wareh_suppliers` WHERE `supplier` = '$supplier'");
$userr = $result->fetch_assoc();


if(!$userr || count($userr) ==0)
{
$mysql->query("INSERT INTO `wareh_suppliers`
(`supplier`,
`organization`,
`email`,
`phone`,
`position`,
`priority`,
`personalnumber`,
`location`)
VALUES
('$supplier',
'$organization',
'$email',
'$phone',
'$position',
'$priority',
'$personalnumber',
'$location')");
$mysql->close();
header('Location: ../php/errors/supplierregconfirm.php');
    }
else{
   header('Location: ../php/errors/suppliererror1.php');
}

?>
