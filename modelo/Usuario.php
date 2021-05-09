<?php

include_once("AccesoDatos.php");
class Usuario{
	private $nUsu = 0;
	private $sPwd = "";
	private $oAD = null;

	public function getUsuario(){
		return $this->nUsuario;
	}
	public function setUsuario($valor){
		$this->nUsuario = $valor;
	}

	public function getPwd(){
		return $this->sPwd;
	}
	public function setPwd($valor){
		$this->sPwd = $valor;
	}

	public function buscarUsuarioPwd(){
	$bRet = false;
	$sQuery = "";
	$arrRS = null;
		if (($this->usuario == 0 || $this->sPwd == "") )
			throw new Exception("Usuario->buscar: faltan datos");
		else{
			$sQuery = "SELECT t1.id_usuario
					   FROM usuario t1
					   WHERE t1.usuario = ".$this->nUsuario."
					   AND t1.password = '".$this->sPwd."'";
			//Crear, conectar, ejecutar, desconectar
			$oAD = new AccesoDatos();
			if ($oAD->conectar()){
				$arrRS = $oAD->ejecutarConsulta($sQuery);
				$oAD->desconectar();
				if ($arrRS != null){
					$this->oUsuario = new Usuario();
					$this->oUsuario->setid_usuario($arrRS[0][0]);
					$this->oUsuario->buscar();
					$bRet = true;
				}
			}
		}
		return $bRet;
	}
}
?>
