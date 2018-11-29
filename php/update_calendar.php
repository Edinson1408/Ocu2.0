<?php


session_start();

	include('../api/general.php');
	
	$Obj_Ge=new Datos;

	if(isset($_POST['id_muro'])){
		$id_muro=$_POST['id_muro'];
		$link=$_POST['link'];
		$base=$_SESSION['bd'];
		$id_usuario=$_SESSION['IdPersona'];
		
		
		$Obj_Ge->actualiza_url_cal($base,$id_muro,$link,$id_usuario);
		//mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname' where userid='$id'");
	}
	
?>
