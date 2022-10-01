<?php
class Pedido{
    private $id;
    private $fec;
    private $val;
    private $usu;

    public function getFec(){
		return $this->fec;
	}
    public function setFec($fec){
        $this->fec = $fec;
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