<?php
session_start();
	include('../api/general.php');
	$Obj_Ge=new Datos;
$base=$_SESSION['bd'];

//Recogemos la cadena
$busqueda=$_POST['cadena'];



if ($busqueda=="") 
{
  echo "<center>Escriba para Buscar por Vendedor</center>";
}
else
{
$Consulta=$Obj_Ge->Buscar_Por_Vendedor($busqueda);
foreach ($Consulta as $key14 ) 
{

 $imge_xd=$Obj_Ge->foto_logo_o($key14['IdCliente'],$base);
                             //foto s/n
                            $img="../../../Preferencias/$imge_xd/1/Imagenes/Logo.jpg";
                            if (file_exists($img)) {
                             $rutaP=  "<img src='../../Preferencias/$imge_xd/1/Imagenes/Logo.png' style='width: 40px;height: 40px;'>";
                             }
                            else
                            {
                            $rutaP= "<img src='https://thumbs.dreamstime.com/b/icono-an%C3%B3nimo-del-usuario-89671074.jpg' style='width: 40px;height: 40px;'>";

                            }
                                
?>
   <div class="row sideBar-body buscar">
                      <div class="col-sm-2 col-xs-2 sideBar-avatar">
                        <div class="avatar-icon">
     <a class="dropdown-toggle"   data-toggle="dropdown"><?php echo $rutaP; ?></a>
                                  <ul class="dropdown-menu dropdown-menu-right" >
                                      <li><a class="" data-toggle="modal" data-target="#edits<?php echo $key14['IdCliente']; ?>"><i class="glyphicon glyphicon-bookmark"></i> Estado </a></li>
                                      <li><a class=""><i class="glyphicon glyphicon-signal"></i> Encuesta</a></li>
                                      <li><a href="http://sky.gestionx.com/erpx/Componentes/c_socio_negocio/#!/detail/<?php echo $key14['IdCliente'];?>" target="_blank"><i class="glyphicon glyphicon-user"></i> Datos Socio </a></li>
                     
                                  </ul>


              
                         
                        </div>
                      </div>

                     <a href="ocurrencias.php?IdC=<?php echo $key14['IdCliente'];?>&ve=<?php echo $busqueda;?>" style="text-decoration: none;"> <div class="col-sm-9 col-xs-9 sideBar-main">
                        <div class="row">
                          <div class="col-sm-9 col-xs-9 sideBar-name" style="overflow: hidden;float: left;">
                            <span class="name-meta" style=""><?php echo utf8_encode($key14['NombreSocio']) ; ?>
                          </span><br>
                     
                          <samp class="name-meta" >
                               <?php //echo utf8_encode(str_replace("<br />", "", $key14['ComentarioCompleto']));
                                        $string=str_replace("<br />", "", $key14['ComentarioCompleto']);
                                        echo  utf8_encode(str_replace("<br>", "",$string));
                               
                               
                               ?> </samp>
                          </div>
                          <div class="col-sm-2 col-xs-2 pull-right sideBar-time hidden-xs" style='float: left!important;'>
                            <span class="time-meta pull-right" style='float: left!important;'><?php 
                          
                                $date = date_create($key14['FCrea']);
                              echo date_format($date, 'd/m/y H:i'); ?>
                          </span>
                          </div>
                          </a>
                          
                           <div class="col-sm-1 col-xs-1  " onclick="filtroPorEstado('s');" style="padding: 10px !important">
                            <span class="badge" style="font-size:50px;">
                            <?php 
                                   $estadoM=$Obj_Ge->ObtenerEstado($key14['IdCliente'],$based);
                                    echo  ($estadoM=='')?'Sin Estado' : $estadoM;
                                    
                                    
                            ?>
                          </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
  

<?php
 include '../includes/EstadoEnBuscador.php';

}
}
?>