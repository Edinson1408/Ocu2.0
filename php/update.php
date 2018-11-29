<?php
session_start();

	include('../api/general.php');
	
	$Obj_Ge=new Datos;

	if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$comentario=$_POST['firstname'];
		$base=$_SESSION['bd'];
		
		
		$Obj_Ge->actualizar($id,$comentario,$base);
		//mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname' where userid='$id'");
	}
	//echo "<h1> holas</h1>"*/


?>
