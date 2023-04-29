<?php
include 'C:/xampp/htdocs/produits/config.php';
class soinp
 { //record
    public function listesoin (){
    $sql = "SELECT * FROM soin";
    $db  = config ::getConnexion();
        try {
        $list = $db->query($sql);
        return $list;
        }
         catch (Exception $e){
        echo('Error:'.$e->getMessage());
        }
    }
    public function showDetails($ids){
    $sql = "SELECT * FROM soin WHERE ids = ". $ids; 
    $db  = config ::getConnexion();
    try {
     $query = $db->prepare($sql);
     $query->execute();
     $soin= $query->fetch();
     return $soin;
    }

    catch (Exception $e){
    echo('Error:'.$e->getMessage());
    }

    }
    public function add($soin){
  
    $sql = "INSERT INTO soin VALUES (NULL, :idp1, :arrosage, :terre, :taille, :maladie)";

    $db = config ::getConnexion(); //moujouda fel config 
    try {
       // print_r($soin->getdate()->format('Y-m-d'));
        $query = $db->prepare($sql);
       
        $query->execute([
            'idp1'=> $soin->getidp1(),
            'arrosage'=> $soin->getarrosage(),
            'terre'=> $soin->getterre(),
            'taille'=> $soin->gettaille(),
            'maladie'=>$soin->getmaladie()
        ]);
    }catch(Exception $e){
        echo('hello:'.$e->getMessage());
    }
    }
    public function delete($ids) {
    $sql ="DELETE FROM soin WHERE ids = :ids";
    $db = config::getConnexion();
    var_dump($db);
    try {
        $query = $db->prepare($sql);
        $query->bindValue('ids',$ids);
        $query->execute();
        return $query;
    }
        catch(Exception $e){
            echo('Error:'.$e->getMessage());
        }
    }
    function updatesoin($soin, $ids)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE soin SET 
                    idp1 = :idp1, 
                    arrosage = :arrosage, 
                    terre = :terre,
                    taille = :taille, 
                    maladie = :maladie,
                WHERE ids= :ids'
            );
            $query->execute([
                'ids' => $ids,
                'idp1' => $soin->getidp1(),
                'arrosage' => $soin->getarrosage(),
                'terre' => $soin->getterre(),
                'taille' => $soin->gettaille(),
                'maladie' => $soin->getmaladie(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function affichersoin($id)
    {
        $sql = "SELECT * from soin where ids = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $soin= $query->fetch();
            return $soin;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function getimage($id)
    {
        $sql = "SELECT img FROM produit WHERE idp= $id ;";
        $db = config ::getConnexion();
            try {
                $query =$db->prepare($sql);
                $soin = $query->execute(); 
                $soin= $query->fetch();

                return $soin['img'];
            } catch (Exception $e) {
                die('Error: ' . $e->getMessage());
            }
    
    }
}
    ?>