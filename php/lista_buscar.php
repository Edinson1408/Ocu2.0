<?php
session_start();
include('../api/general.php');
	$Obj_Ge=new Datos;
$base=$_SESSION['bd'];

if(!empty($_POST["keyword"])) {
$busqueda=$_POST["keyword"];

$Consulta=$Obj_Ge->Buscar_Vendedor($busqueda,$base);

?>
<ul id="country-list" style="background-color:#eeeeee;text-decoration: none;list-style:none" >
<?php
foreach($Consulta as $country) {
?>
<li style="text-decoration: none;cursor: pointer;list-style:none" onClick="selectCountry('<?php echo $country["Nombre"]; ?>','<?php echo $country["IdPersona"]; ?>');"><?php echo utf8_encode($country["Nombre"]); ?></li>


<?php } } ?>
</ul>


