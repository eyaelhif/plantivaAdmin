<?php

include 'C:/xampp/htdocs/produits/controller/produitp.php';
include_once 'C:/xampp/htdocs/produits/Model/produit.php';

 {
 //echo $_FILES['media_produit']['tmp_nom']; 
 // echo $_POST['idp']; 
	$nom = $_POST['nom']; //
    $idp=$_POST['idp'];
	$nombre = $_POST['nombre']; //
	$prix = $_POST['prix']; //
    $categorie= $_POST['categorie'];
 

 
    
    //$date_demande = date('m/d/Y h:i:s a', time());
}


$produit = new produit(null,null,null,null,null,null,null);
$produitp = new produitp();

$produit->setnombre($nombre) ;
$produit->setprix($prix); 
$produit->setnom($nom); 
$produit->setcategorie($categorie); 
//$produit->setFile($file) ;




$produit->setidp($idp);
var_dump($produit);

$produitp->updateproduit($produit,$produit->getidp());
header('Location:listeproduit.php');
?>