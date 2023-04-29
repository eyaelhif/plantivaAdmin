<?php
include 'C:/xampp/htdocs/produits/controller/soinp.php';
$soin = new soinp();
$soin->delete($_GET['ids']);
header('Location:listesoin.php');
?>