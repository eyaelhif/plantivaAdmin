<?php
include 'C:/xampp/htdocs/produits/controller/produitp.php';
$produit = new produitp();
$produit->delete($_GET['idp']);
header('Location:listeproduit.php');
?>