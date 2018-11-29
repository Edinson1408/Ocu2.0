<?php
session_start();
$base=$_SESSION['bd'];
	include('../api/general.php');
	
	$Obj_Ge=new Datos;

//print_r($_POST);

$IdPersona=$_POST['IdPersonaAccion'];
$IdAccionesOcurrencias=$_POST['IdAccion'];
$Obj_Ge->ActualizaAccion($IdPersona,$IdAccionesOcurrencias,$base);

?>