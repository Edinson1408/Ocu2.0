<?php
session_start();
	include('../api/general.php');
	$Obj_Ge=new Datos;
$base=$_SESSION['bd'];

//Recogemos la cadena
$busqueda=$_POST['cadena'];


$Consulta=$Obj_Ge->Buscar_Contactos($busqueda,$base);
foreach ($Consulta as $key14 ) 
{


?>

  <div class="row sideBar-body buscar2">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                   <?php 

                   $imge_xd=$Obj_Ge->foto_logo_o($key14['0'],$base);
                             //foto s/n
                            $img="../../../Preferencias/$imge_xd/1/Imagenes/Logo.jpg";
                            if (file_exists($img)) {
                             echo  "<img src='../../Preferencias/$imge_xd/1/Imagenes/Logo.png'>";
                             }
                            else
                            {
                              echo "<img src='https://thumbs.dreamstime.com/b/icono-an%C3%B3nimo-del-usuario-89671074.jpg'>";

                            }
                                  ?>
              </div>
            </div>

            <div class="col-sm-9 col-xs-9 sideBar-main">
          <a href="ocurrencias.php?IdC=<?php echo $key14['0']; ?>" style="text-decoration: none;"> 
              <div class="row">

                <div class="col-sm-8 col-xs-8 sideBar-name" style="overflow: hidden;">
                  <span class="name-meta"><?php echo urldecode(utf8_encode($key14['3']));  ?></span>
                </div>

                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">
                </span>
                </div>
              </div>
            </div>
          </div>
        </a>

<?php


}

?>