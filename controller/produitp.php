<?php
include 'C:/xampp/htdocs/produits/config.php';
//include 'C:/xampp/htdocs/produit/controller/produitp.php';
class produitp { //record
    public function listeproduit (){
    $sql = "SELECT * FROM produit";
    $db  = config ::getConnexion();
        try {
        $list = $db->query($sql);
        return $list;
        }
         catch (Exception $e){
        echo('Error:'.$e->getMessage());
        }
    }
    public function showDetails($idp){
    $sql = "SELECT * FROM produit WHERE idp = ". $idp; 
    $db  = config ::getConnexion();
    try {
     $query = $db->prepare($sql);
     $query->execute();
     $produit= $query->fetch();
     return $produit;
    }

    catch (Exception $e){
    echo('Error:'.$e->getMessage());
    }

    }
    public function add($produit){
  
    $sql = "INSERT INTO produit VALUES (NULL, :nom, :img, :prix, :nombre, CURDATE(), :categorie)";

    $db = config ::getConnexion(); //moujouda fel config 
    try {
       // print_r($produit->getdate()->format('Y-m-d'));
        $query = $db->prepare($sql);
       
        $query->execute([
            'nom'=> $produit->getnom(),
            'img'=> $produit->getimg(),
            'prix'=> $produit->getprix(),
            'nombre'=> $produit->getnombre(),
            'categorie'=>$produit->getcategorie()
        ]);
    }catch(Exception $e){
        echo('hello:'.$e->getMessage());
    }
    }
    public function delete($idp) {
    $sql ="DELETE FROM produit WHERE idp = :id";
    $db = config::getConnexion();
    var_dump($db);
    try {
        $query = $db->prepare($sql);
        $query->bindValue('id',$idp);
        $query->execute();
        return $query;
    }
        catch(Exception $e){
            echo('Error:'.$e->getMessage());
        }
    }
    function updateproduit($produit, $idp)
    {     $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE produit SET 
                    nom = :nom, 
                    prix = :prix,
                    nombre = :nombre,  
                    categorie = :categorie
                WHERE idp= :idp'
            );
        try {
       
            $query->execute([
                'idp' => $idp,
                'nom' => $produit->getnom(),
                'prix' => $produit->getprix(),
                'nombre' => $produit->getnombre(),
                'categorie' => $produit->getcategorie(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function afficherproduit($id)
    {
        $sql = "SELECT * from produit where idp = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $produit= $query->fetch();
            return $produit;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function chercherproduit($searchTerm) {
        $sql = "SELECT * FROM produit WHERE CONCAT_WS(' ', idp, nom, prix, nombre, date, categorie) LIKE :searchTerm ;";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':searchTerm', '%'.$searchTerm.'%', PDO::PARAM_STR);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch(PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function SortProduit (){
        $sql = "SELECT * FROM produit ORDER BY prix ASC";
        $db  = config ::getConnexion();
        try {
         $list = $db->query($sql);
         return $list;
        }
    
        catch (Exception $e){
        echo('Error:'.$e->getMessage());
        }
        }
        
}
    ?>