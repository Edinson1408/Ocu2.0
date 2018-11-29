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
      
         

 $nivel_usurario=$_SESSION['JefeArea'];
if ($nivel_usurario=='No' or $nivel_usurario=='Si' ) 
   { 

      $numero_retorno=$Obj_Ge->clinete_vendedor($base,$key14['0'],$_SESSION['IdPersona']);

        if ($numero_retorno>0) {
          $variable= "href='ocurrencias.php?IdC=".$key14['0']."'";
        }
        else
        {
          $varmensaje=5;
          $variable= 'onclick="control_user('.$varmensaje.')" ';
        }
      
  }
else
  {
   
    $variable= "href='ocurrencias.php?IdC=".$key14['0']."'";
  }





?>

  <div class="row sideBar-body buscar2">
      
             <div class="col-sm-2 col-xs-2 sideBar-avatar">
                        <div class="avatar-icon">
                              <?php 
               

                   $imge_xd=$Obj_Ge->foto_logo_o($key14['0'],$base);
                             //foto s/n
                            $img="../../../Preferencias/$imge_xd/1/Imagenes/Logo.jpg";
                            if (file_exists($img)) {
                             $rutaP=  "<img src='../../Preferencias/$imge_xd/1/Imagenes/Logo.jpg'>";
                             }
                            else
                            {
                              $rutaP= "<img src='https://thumbs.dreamstime.com/b/icono-an%C3%B3nimo-del-usuario-89671074.jpg'>";

                            }
                    ?>
                            
                        <a class="dropdown-toggle"   data-toggle="dropdown"><?php echo $rutaP; ?></a>
                                  <ul class="dropdown-menu dropdown-menu-right" >
                                      <li><a class="" data-toggle="modal" data-target="#edits<?php echo $key14['0']; ?>"><i class="glyphicon glyphicon-bookmark"></i> Estado </a></li>
                                      <li><a class=""><i class="glyphicon glyphicon-signal"></i> Encuesta</a></li>
                                      <li><a href="http://sky.gestionx.com/erpx/Componentes/c_socio_negocio/#!/detail/<?php echo $key14['0'];?>" target="_blank"><i class="glyphicon glyphicon-user"></i> Datos Socio </a></li>
                                       <hr style="    margin-top: 0px;margin-bottom: 0px;border-top: 1px solid #075e54;">
                                       <li onclick="CambiaVendedor(<?php echo $key14['IdPersona']; ?>)" data-toggle="modal" data-target="#ModalEditVendedor"><center><?php 
                                              $VendedorAsi=$Obj_Ge->ObtVendedorAsig($key14['0'],$base);
                                            echo  ($VendedorAsi=='')?'Sin Vendedor' : $VendedorAsi;
                                      ?></center></li>
                     
                                  </ul>
                        </div>
                      </div>
      
      
            

            <div class="col-sm-9 col-xs-9 sideBar-main">
          <a <?php echo $variable; ?>  style="text-decoration: none;"> 
              <div class="row">

                <div class="col-sm-10 col-xs-10 sideBar-name" style="overflow: hidden;">
                  <span class="name-meta"><?php echo utf8_encode($key14['3']);  ?></span>
                </div>

                <div class="col-sm-2 col-xs-2 pull-right sideBar-time hidden-xs">
                  <span class="time-meta pull-right">
                      
                </span>
                </div>
                </a>
                     <?php 
                                    $estadoM=$Obj_Ge->ObtenerEstado($key14['0'],$based);
                                    //echo  ($estadoM=='')?'SIN' : $string= substr($estadoM, 0, 3);
                                    
                                    
                            ?>
                
                 <div class="col-sm-1 col-xs-1  " onclick="filtroPorEstado('s');" style="padding: 10px !important">
                            <span class="badge" style="font-size: 13px;background-color:<?php echo  ($estadoM['Color']=='')?'#999' : $estadoM['Color']; ?>" id="EstadoMostrado<?php echo $key14['0'];?>">
                            <?php 
                            
                                   //$estadoM=$Obj_Ge->ObtenerEstado($key14['0'],$based);
                                   echo  ($estadoM['Desc']=='')?'SIN' : $estadoM['Desc'];
                                    //echo  ($estadoM=='')?'SIN' : $string= substr($estadoM, 0, 3).'.';
                                     
                                    
                            ?>
                </span>
                </div>
                
                
              </div>
            </div>
          </div>
        


<?php
 include '../includes/EstadoEnBuscadorOcurrencia.php';

}

?>
<script type="text/javascript">
  function control_user($num) {
    if ($num==5) {
      swal("Lo sentimos, pero Ud, no tiene permisos para ver información sobre este socio de negocio");
    }
  }
</script>