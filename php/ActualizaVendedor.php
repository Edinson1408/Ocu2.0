<?php
session_start();
$base=$_SESSION['bd'];
	include('../api/general.php');
	
	$Obj_Ge=new Datos;

//print_r($_POST);

$IdPersona=$_POST['IdPersonaCV'];
$IdVendedor=$_POST['IdVendedor'];
$Obj_Ge->ActualizaVendedor($IdPersona,$IdVendedor,$base);
echo '1';
//	if(isset($_POST['edit'])){
	//	$idPersona=$_POST['id'];
		
	//	$base=$_SESSION['bd'];
		
		
		//$Obj_Ge->actualiza_estado($base,$idPersona,$Estado);
		//mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname' where userid='$id'");
//	}
	//echo "<h1> holas</h1>"*/


?>