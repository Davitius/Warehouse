<?php
error_reporting(E_ERROR);
setcookie('wareh_userr', $userr['user'], time() - 3600*10, "/");
header('Location: ../index.php');

?>
