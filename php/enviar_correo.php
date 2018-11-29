<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php 

//id ocurrencia





if (isset($_POST['id'])) {
	//header("Content-Type: text/html;charset=utf-8");

require '../PHPMailer/PHPMailerAutoload.php';
define('PHPMAILER_HOST','smtp.gmail.com');
//define('PHPMAILER_HOST','smtp-mail.outlook.com');
define('PHPMAILER_USER','info@gestionx.com');
define('PHPMAILER_PASS','Fe71zD1@');
define('PHPMAILER_PORT',465);


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                     // Enable verbose debug output

$mail->Charset = "UTF-8";
$mail->Encoding = "quoted-printable";
$mail->isSMTP();                                    
$mail->Host = PHPMAILER_HOST;  
$mail->SMTPAuth = true;                            
$mail->Username = PHPMAILER_USER;               
$mail->Password = PHPMAILER_PASS;                         
$mail->SMTPSecure = 'ssl';                         
$mail->Port = PHPMAILER_PORT;  

$mail->isHTML(true);  

$mail->setFrom('ingenieria1@gestionx.com', 'Ocurrecias2.0');


$clie=$_POST['id'];//cliente
$muroid=$_POST['del'];//id_muro




session_start();
	include('../api/general.php');
	$Obj_Ge=new Datos;
	$base=$_SESSION['bd'];
	$correo=$Obj_Ge->correos($clie,$muroid,$base);

	foreach ($correo as $key) 
	{
		 $correo1=$key['4'];
		  $correo2=$key['5'];
		  $nombree=$key['6'];
	}


/*$a="Estimada(o) ".$nombree."<br>";
$a.="Solicito mayor informacion sobre el cliente : ".$_POST['nom']."<br>";
$a.="Estare a la espera de tu respuesta";*/

echo $correo1;
echo $nombree;



if ($correo1==$correo2) {
	
}else
{

	echo $correo2;
}


//echo $_POST['correo1']; //correo
//echo $_POST['correos']; //correo

$valores_encadenados = $_POST['correos']; 
$valor_array = explode(',',$valores_encadenados); 
 
foreach($valor_array as $llave => $valores) 
{ 
     //$valores . "<br />"; 

     $mail->addAddress($valores, $nombre);
}



//$mail->addAddress($_POST['correo1'], $nombre);
//$mail->addAddress($_POST['correo2'], $nombre);

$mail->addAddress('efloran1408@gmail.com', $nombre);

$mail->Subject = utf8_decode($_POST['asunto']); //asunto 


echo $cuerpo_mensaje=utf8_decode($_POST['firstname']." "."<a href='http://sky.gestionx.com/erpx/Componentes/Ocurrencias2.0/ocurrencias.php?IdC=".$_POST['cliente']."' target='_blank'>Ver Ocurrencias de este socio de negocio</a>"."<br><br>Enviado desde el sistema  <a href='http://skyneterp.com' target='_blank'>Skynet ERP</a>");

$mail->Body    = $cuerpo_mensaje; //mensaje;  //mensaje 

 

if(!$mail->send()) {
 require '../PHPMailer/PHPMail  erAutoload.php';
} 
else {
    
    ECHO 'SE ENVIO EL MENSAJE';
}

 

}




?>
