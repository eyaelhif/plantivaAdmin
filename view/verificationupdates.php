<?php

include 'C:/xampp/htdocs/produits/controller/soinp.php';
include_once 'C:/xampp/htdocs/produits/Model/soin.php';

 {
 //echo $_FILES['media_soin']['tmp_nom']; 
 // echo $_POST['idp']; 
	$arrosage = $_POST['arrosage']; //
    $ids=$_POST['ids'];
	$terre = $_POST['terre']; //
	$taille = $_POST['taille']; //
    $maladie= $_POST['maladie'];
    
    //$date_demande = date('m/d/Y h:i:s a', time());
}


$soin = new soin(null,null,null,null,null,null,null);
$soinp = new soinp();

$soin->setarrosage($arrosage) ;
$soin->setterre($terre); 
$soin->settaille($taille); 
$soin->setmaladie($maladie); 
//$soin->setFile($file) ;




$soin->setids($ids);
var_dump($soin);

$soinp->updatesoin($soin,$soin->getids());
//header('Location:listesoin.php');
?>