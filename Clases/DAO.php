<?php

require 'Usuario.php';
require 'Carrito.php';
require 'Pedido.php';
require 'Detalle.php';

class DAO{
	private $mi;

	private function conexion(){
		// mysqli("IP SERVIDOR","USUARIO BD","CONTRASEÑA","DB")
		$this->mi = new mysqli("localhost","root","","exa");
	if($this->mi->connect_errno){
			die("Error al establecer la conexion a la BD -> BD_SISTEMA");
		}
	}

	private function desconexion(){
		$this->mi->close();
	}

	public function ComprobarUsuario($email,$contra){
		$listaU = array();
		$this->conexion();
		$sql = "select * from usuarios where ema_usu = '$email' and pas_usu = '$contra';";
		$st = $this->mi->query($sql);
		while($rs = mysqli_fetch_array($st)){
			$id = $rs['cod_usu'];
			$nom = $rs['nom_usu'];
			$ema = $rs['ema_usu'];
			$pas = $rs['pas_usu'];

			$u = new Usuario();
			$u -> setId($id);
			$u -> setNom($nom);
    		$u -> setEma($ema);
    		$u -> setPas($pas);
			$listaU[] = $u;
		}
		$this->desconexion();
		return $listaU;
	}

	public function ComprobarCorreo($email){
		$listaU = array();
		$this->conexion();
		$sql = "select * from usuarios where ema_usu = '$email';";
		$st = $this->mi->query($sql);
		while($rs = mysqli_fetch_array($st)){
			$id = $rs['cod_usu'];
			$nom = $rs['nom_usu'];
			$ema = $rs['ema_usu'];
			$pas = $rs['pas_usu'];

			$u = new Usuario();
			$u -> setId($id);
			$u -> setNom($nom);
    		$u -> setEma($ema);
    		$u -> setPas($pas);
			$listaU[] = $u;
		}
		$this->desconexion();
		return $listaU;
	}

	public function AgregarUsuario($nom,$ema,$pas){
		$this->conexion();
		$sql = "insert into usuarios (nom_usu,ema_usu,pas_usu) values ('$nom','$ema','$pas')";
		$st = $this->mi->query($sql);
		$this->desconexion();
	}

	public function AgregarCarrito($nom,$pre,$usu){
		$this->conexion();
		$sql = "insert into carrito (nom_pro,val_pro,cod_usu) values ('$nom',$pre,$usu)";
		$st = $this->mi->query($sql);
		$this->desconexion();
	}

	public function buscarCarrito($id){
		$listaC = array();
		$this->conexion();
		$sql = "select * from carrito where cod_usu = $id;";
		$st = $this->mi->query($sql);
		while($rs = mysqli_fetch_array($st)){
			$id = $rs['cod_car'];
			$nom = $rs['nom_pro'];
			$val = $rs['val_pro'];
			$usu = $rs['cod_usu'];

			$c = new Carrito();
			$c -> setId($id);
			$c -> setNom($nom);
    		$c -> setVal($val);
    		$c -> setUsu($usu);
			$listaC[] = $c;
		}
		$this->desconexion();
		return $listaC;
	}

	public function EliminarCarrito($id){
		$mensaje="";
			$this->conexion();
			$sql = "delete from carrito where cod_car = $id;";
			$st = $this->mi->query($sql);
			$this->desconexion();
			$mensaje = "Producto Eliminado Del Carrito";

		return $mensaje;
	}

	public function AgregarPedido($mon,$usu){
		$this->conexion();
		$sql = "insert into pedidos (fecha,mon_pag,cod_usu) values (sysdate(),'$mon',$usu)";
		$st = $this->mi->query($sql);
		$this->desconexion();
	}

	//select max pedido where cod_usu en una variable,y usar para registrar en una nueva tabla de detalle pedido
	public function AgregarDetallePedido($nom,$val,$usu){
		$this->conexion();
		$sql = "insert into detallepedido (nom_pro,val_pro,cod_ped) values ('$nom',$val,(select max(cod_ped) from pedidos where cod_usu = $usu));";
		$st = $this->mi->query($sql);
		$this->desconexion();
	}

	public function EliminarCarritoUsuario($id){
		$mensaje="";
			$this->conexion();
			$sql = "delete from carrito where cod_usu = $id;";
			$st = $this->mi->query($sql);
			$this->desconexion();
			$mensaje = "Producto Eliminado Del Carrito";

		return $mensaje;
	}

	public function buscarPedido($id){
		$listaPe = array();
		$this->conexion();
		$sql = "select * from pedidos where cod_usu = $id;";
		$st = $this->mi->query($sql);
		while($rs = mysqli_fetch_array($st)){
			$id = $rs['cod_ped'];
			$fec = $rs['fecha'];
			$val = $rs['mon_pag'];
			$usu = $rs['cod_usu'];

			$pe = new Pedido();
			$pe -> setId($id);
			$pe -> setFec($fec);
    		$pe -> setVal($val);
    		$pe -> setUsu($usu);
			$listaPe[] = $pe;
		}
		$this->desconexion();
		return $listaPe;
	}

	public function buscarDetalleCarrito($id){
		$listaD = array();
		$this->conexion();
		$sql = "select * from detallepedido where cod_ped  = $id;";
		$st = $this->mi->query($sql);
		while($rs = mysqli_fetch_array($st)){
			$id = $rs['cod_det'];
			$nom = $rs['nom_pro'];
			$val = $rs['val_pro'];
			$ped = $rs['cod_ped'];

			$d = new Detalle();
			$d -> setId($id);
			$d -> setNom($nom);
    		$d -> setVal($val);
    		$d -> setPed($ped);
			$listaD[] = $d;
		}
		$this->desconexion();
		return $listaD;
	}
}
?>