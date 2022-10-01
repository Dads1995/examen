<?php

class Usuario{
    private $id;
    private $nom;
    private $ema;
    private $pas;

    public function getNom(){
		return $this->nom;
	}
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getId(){
		return $this->id;
	}
    public function setId($id){
        $this->id = $id;
    }
    public function getEma(){
		return $this->ema;
	}
    public function setEma($ema){
        $this->ema = $ema;
    }
    public function getPas(){
		return $this->pas;
	}
    public function setPas($pas){
        $this->pas = $pas;
    }
}

?>