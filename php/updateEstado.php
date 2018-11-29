<?php
session_start();

	include('../api/general.php');
	
	$Obj_Ge=new Datos;

	if(isset($_POST['edit'])){
		$idPersona=$_POST['id'];
		$Estado=$_POST['firstname'];
		$base=$_SESSION['bd'];
		
		
		$Obj_Ge->actualiza_estado($base,$idPersona,$Estado);
		//mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname' where userid='$id'");
	}
	//echo "<h1> holas</h1>"*/


?>
