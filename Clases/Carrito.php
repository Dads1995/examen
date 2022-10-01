<?php
class Carrito{
    private $id;
    private $nom;
    private $val;
    private $usu;

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
    public function getVal(){
		return $this->val;
	}
    public function setVal($val){
        $this->val = $val;
    }
    public function getUsu(){
		return $this->usu;
	}
    public function setUsu($usu){
        $this->usu = $usu;
    }
}
?>