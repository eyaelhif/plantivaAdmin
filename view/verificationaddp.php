
<?php

include "C:/xampp/htdocs/produits/controller/produitp.php";
include_once 'C:/xampp/htdocs/produits/model/produit.php';
$target_dir = 'C:/xampp/htdocs/produits/view/uploads/';
define('STORAGE_PATH',__DIR__,'C:/xampp/htdocs/produits/view/uploads/'); 



$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//if (isset($_POST['name'])  && isset($_POST['nombre']) && isset($_POST['img']) && isset($_POST['prix']))  // CAUSING ERROR
 {
 echo $_FILES['img']['tmp_name']; 
  echo $_POST['nombre']; 
	$nom = $_POST['nom']; //
  $categorie = $_POST['categorie'];
	$nombre = $_POST['nombre'];
	$prix = $_POST['prix'];
 


  $allowTypes = array('jpg','png','jpeg','gif','pdf');


    $check = getimagesize($_FILES["img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;

  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  move_uploaded_file($_FILES["img"]["tmp_name"],
  STORAGE_PATH . '/' . $_FILES["img"]["name"]);

    $file = $_FILES['img'];
    $file_name = $_FILES["img"]["name"] ;
    
    $date_demande = date('m/d/Y h:i:s a', time());
}



$produit = new produit(null,null,null,null,null,null,null);
$produitp = new produitp();

$produit->setprix($prix);
$produit->setnombre($nombre);
$produit->setnom($nom); 
$produit->setcategorie($categorie);

$produit->setimg($file_name) ;

  

 

//$produit->setidp($id);
var_dump($produit);

$produitp->add($produit);
header('Location:listeproduit.php');




?>