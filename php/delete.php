<?php
session_start();
	include('../api/general.php');
	$Obj_Ge=new Datos;

	if(isset($_POST['del'])){
		$id=$_POST['id'];
		$base=$_SESSION['bd'];

		$Obj_Ge->delete_ocurrencia($base,$id);
	}
?>