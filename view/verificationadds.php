<?php

include "C:/xampp/htdocs/produits/controller/soinp.php";
include_once 'C:/xampp/htdocs/produits/model/soin.php';


//if (isset($_POST['name'])  && isset($_POST['maladie']) && isset($_POST['img']) && isset($_POST['taille']))  // CAUSING ERROR
 { var_dump($_POST['idp1']);
    $idp1 = $_POST['idp1'];
	$arrosage = $_POST['arrosage']; //
    $terre = $_POST['terre'];
	$maladie = $_POST['maladie']; //
	$taille = $_POST['taille']; //
}


$soin = new soin(null,null,null,null,null,null);
$soinp = new soinp();

$soin->setidp1($idp1);
$soin->settaille($taille); 
$soin->setarrosage($arrosage); 
$soin->setterre($terre);
$soin->setmaladie($maladie);

 

//$soin->setidp($id);
var_dump($soin);

$soinp->add($soin);
header('Location:listesoin.php');




?>