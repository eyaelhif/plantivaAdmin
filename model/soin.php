<?php 
class soin
{
    private ?int $ids = null;
    private ?int $idp1 = null;
    private ?int $arrosage = null;
    private ?string $terre = null;
    private ?string $taille = null;
    private ?string $maladie = null;
    public function __construct($ids = null, $idp1,$arrosage, $terre,$taille,$maladie)
    {
        $this->ids = $ids;
        $this->idp1 = $idp1;
        $this->arrosage = $arrosage;
        $this->terre= $terre;
        $this->taille= $taille;
        $this->maladie=$maladie;
    }
    /**
     * Get the value of id
     */
    public function getids()
    {
        return $this->ids;
    }
    public function setids($ids)
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * Get the value of productname
     */
    public function getidp1()
    {
        return $this->idp1;
    }

    /**
     * Set the value of productname
     *
     * @return  self
     */
    public function setidp1($idp1)
    {
        $this->idp1 = $idp1;

        return $this;
    }
     /**
     * Get the image
     */
    public function getarrosage()
    {
        return $this->arrosage;
    }

    /**
     * Set the image
     *
     * @return  self
     */
    public function setarrosage($arrosage)
    {
        $this->arrosage = $arrosage;

        return $this;
    }
   
    /**
     * Get the value of quantity
     */
    public function getterre()
    {
        return $this->terre;
    }

        /**
     * Set the value of quantity
     *
     * @return  self
     */
    public function setterre($terre)
    {
        $this->terre = $terre;

        return $this;
    }
/**
     * Get the value of price
     */
    public function gettaille()
    {
        return $this->taille;
    }

        /**
     * Set the value of price
     *
     * @return  self
     */
    public function settaille($taille)
    {
        $this->taille= $taille;

        return $this;
    }
    /**
     * Get the value of dot
     */
    public function getmaladie()
    {
        return $this->maladie;
    }

        /**
     * Set the value of dot
     *
     * @return  self
     */
    public function setmaladie($maladie)
    {
        $this->maladie = $maladie;

        return $this;
    }
  
}
?>