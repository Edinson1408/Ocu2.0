
<?php
session_start();





	include('../api/general.php');
	$Obj_Ge=new Datos;

	if(isset($_POST['add'])){
		$comentario=$_POST['firstname'];//comentario
		$base=$_SESSION['bd'];
		$mi_id=$_SESSION['IdUsuario'];
		$mi_empresa=$_SESSION["IdMiEmpresaPrincipal"];
		$cliente=$_POST['lastname'];//base 
		$IdAccionOcurrencia=$_POST['IdAccion'];
		$Obj_Ge->add_ocurrencia($comentario,$base,$mi_empresa,$mi_id,$cliente,$IdAccionOcurrencia);
		
	}
?>