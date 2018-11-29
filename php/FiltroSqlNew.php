<?php
session_start();
	include('../api/general.php');
	$Obj_Ge=new Datos;
$base=$_SESSION['bd'];
//la sesion debera almacenar toda el serialice

//print_r($_GET);

$_SESSION['filtros']=$filtros="formato=".$_REQUEST['formato']."&dtpFechaIni=".$_REQUEST['dtpFechaIni']."&dtpFechaFin=".$_REQUEST['dtpFechaFin']."&IdVendedor=".$_REQUEST['IdVendedor']."&IdPersonaV=".$_REQUEST['IdPersonaV']."&IdMiEmpresaCliV=".$_REQUEST['IdMiEmpresaCliV']."&checkTodosVendedores=".$_REQUEST['checkTodosVendedores']."&vendedores=".$_REQUEST['vendedores']."&Contvendedores=".$_REQUEST['Contvendedores']."&IdPersonaR=".$_REQUEST['IdPersonaR']."&IdCliente=".$_REQUEST['IdCliente']."&IdMiEmpresaCli=".$_REQUEST['IdMiEmpresaCli']."&optCliente=".$_REQUEST['optCliente']."&NomCliente=".$_REQUEST['NomCliente']."&ContNomCliente=".$_REQUEST['ContNomCliente']."&IdNodo1=".$_REQUEST['IdNodo1']."&DescIdNodo1=".$_REQUEST['DescIdNodo1']."&ordenamiento=".$_REQUEST['ordenamiento']."&Estatus=".$_REQUEST['Estatus'];
//echo $_SESSION['filtros']; 
/*
Array ( [formato] => 3 [dtpFechaIni] => 2018-06-01 [dtpFechaFin] => 2018-09-14 [IdVendedor] => [IdPersonaV] => 42615 [IdMiEmpresaCliV] => [checkTodosVendedores] => 3 [vendedores] => [Contvendedores] => 0 [IdPersonaR] => [IdCliente] => [IdMiEmpresaCli] => [optCliente] => cliente [NomCliente] => [ContNomCliente] => 0 [IdNodo1] => [DescIdNodo1] => [ordenamiento] => DESC [Estatus] => Todos )
*/

include('../../../Cx.php');
$link=Conectarse(); //mysql
if(isset($_POST['Action'])){ //AJAX
    $sqlEst = "SELECT 'ALL' IdMaestro ,'TODOS' DescripCorta UNION SELECT '99' IdMaestro ,'SIN ESTATUS' DescripCorta UNION ALL SELECT IdMaestro, DescripCorta FROM ma00 Where IdGrupo=55 AND IdMiEmpresa=".$_SESSION['IdMiEmpresaPrincipal'];
    $resEst = mysqli_query($link,$sqlEst);
    $cade   = "";
    $c2     = "";
    while($row=$resEst->fetch_object()){
        $c2   .= $row->IdMaestro.",";
        $cade .= "<input type='checkbox' class='Maestros' id='M".$row->IdMaestro."' checked onClick='validaCheck(this.value);' value='".$row->IdMaestro."'>".utf8_encode($row->DescripCorta)."</br>";
    }
    $c2      = substr($c2, 0,-1);
    $cade   .= "<input type='hidden' id='cadT' value='".$c2."'>";
    echo $cade;
    exit;
}


$where = '';
if(isset($_REQUEST['IdPersonaR']) && $_REQUEST['IdPersonaR'] != ''){
    $where = ' and p.IdPersona='.$_REQUEST['IdPersonaR']." ";
}
// print_r($_REQUEST);exit;
if(isset($_REQUEST['IdPersonaV']) && $_REQUEST['IdPersonaV'] != ''){
    $where.=' and ven.IdPersona = '.$_REQUEST['IdPersonaV'];
}

if(isset($_REQUEST['checkTodosVendedores']) && $_REQUEST['checkTodosVendedores'] == 2){
    $where.=' and ven.IdPersona is null ';
}
 
if(isset($_REQUEST['Estatus']) && $_REQUEST['Estatus']=='Todos'){
    $estatus = ' ';
}else if (preg_match("/99/i",$_REQUEST['Estatus'])) { 
    echo $cam     = substr($_REQUEST['Estatus'], 3);
    //$orc     = ($cam=='') ? "" : " or ma.IdMaestro IN (".$cam.") ";
    $orc     = ($cam=='') ? "" : "  ma.IdMaestro IN (".$cam.") ";
    //$estatus = " and ma.IdMaestro is null ".$orc." ";
    $estatus = " and  ".$orc." ";
}else{
    $estatus = ' and ma.IdMaestro IN ('.$_REQUEST['Estatus'].')';
}
// $sqlclientes = "select ma.DescripCorta as Estatus,ifnull(ma.AuxDet1,'#fff') color,p.IdPersona,p.Nombre,ifnull(group_concat( distinct concat(Nombres,ifnull(concat('-',Telefono),'')) SEPARATOR ','),'No Asignado') as contactos, ifnull(group_concat(distinct can_cel.DescripCanal separator ','),'No Asignado') as celulares, ifnull(group_concat(distinct can_tlf.DescripCanal separator ','),'No Asignado') as telefonos, ifnull(group_concat(distinct can_email.DescripCanal separator ','),'No Asignado') as email, ifnull(group_concat(distinct can_radio.DescripCanal separator ','),'No Asignado') as RadioNextel, ifnull(group_concat(distinct can_rpm.DescripCanal separator ','),'No Asignado') as rpm, ifnull(group_concat(distinct can_msn.DescripCanal separator ','),'No Asignado') as msn, ifnull(ven.Nombre,'No Asignado') as vendedor,max(m.FCrea) FCrea from muro m left join persona p on (m.IdCliente = p.IdPersona) left join empre_cliente ecli on (p.IdPersona = ecli.Idpersona) left join persona ven on (ecli.IdPersonaVend = ven.IdPersona) left join contactos con on (p.IdPersona = con.IdDoc) left join canales can_cel on (p.IdPersona = can_cel.IdDoc and can_cel.Canal = 'Celulares') left join canales can_tlf on (p.IdPersona = can_tlf.IdDoc and can_tlf.Canal = 'Tel�fono Fijo') left join canales can_email on (p.IdPersona = can_email.IdDoc and can_email.Canal = 'Email') left join canales can_radio on (p.IdPersona = can_radio.IdDoc and can_radio.Canal = 'Radio-Nextel') left join canales can_rpm on (p.IdPersona = can_rpm.IdDoc and can_rpm.Canal = 'RPM') left join canales can_msn on (p.IdPersona = can_msn.IdDoc and can_msn.Canal = 'MSN') left join ma00 ma on (ecli.Estatus = ma.IdMAestro and ma.IdMiEmpresa = 1) WHERE date_format(m.FCrea,'%Y-%m-%d') BETWEEN '".$_GET['dtpFechaIni']."' AND '".$_GET['dtpFechaFin']."' $where $estatus and p.IdPersona is not null group by p.IdPersona order by max(m.FCrea) ".$_REQUEST['ordenamiento'];
  $sqlclientes = "select ma.DescripCorta as Estatus,ifnull(ma.AuxDet1,'#fff') color,p.IdPersona,p.Nombre,  ifnull(ven.Nombre,'No Asignado') as vendedor,max(m.FCrea) FCrea from muro m left join persona p on (m.IdCliente = p.IdPersona) left join empre_cliente ecli on (p.IdPersona = ecli.Idpersona) left join persona ven on (ecli.IdPersonaVend = ven.IdPersona) left join ma00 ma on (ecli.Estatus = ma.IdMAestro and ma.IdMiEmpresa = 1) WHERE date_format(m.FCrea,'%Y-%m-%d') BETWEEN '".$_GET['dtpFechaIni']."' AND '".$_GET['dtpFechaFin']."' $where $estatus and p.IdPersona is not null group by p.IdPersona order by max(m.FCrea) ".$_REQUEST['ordenamiento'];
$rescli = mysqli_query($link,$sqlclientes);



$i=0;
?>






<?php


if(isset($_REQUEST['DescIdNodo1']) && $_REQUEST['DescIdNodo1'] != ''){
    $grupo = $_REQUEST['DescIdNodo1'];
}else{
    $grupo = "Todos";
}
?>


<?php       
    
$where = '';
while($data = $rescli->fetch_object()){

     $where = ' where p.IdPersona='.$data->IdPersona.' ';
       $sql2="SELECT * FROM (SELECT IdCliente as IdPersona,Comentario as ComentarioCompleto, 
       (select Nombre from persona where IdPersona=(select IdPersona from usuarios_skynet where IdUsuario=muro.IdUserCrea))as NomUserCrea,
       (select Nombre from persona where IdPersona=muro.IdCliente) as NombreSocio,
       FCrea, DocOrigen,origen FROM muro WHERE date_format(FCrea,'%Y-%m-%d') BETWEEN '".$_GET['dtpFechaIni']."' AND '".$_GET['dtpFechaFin']."')  p $where ORDER BY p.FCrea ".$_REQUEST['ordenamiento']."  limit 1";
    $res = mysqli_query($link,$sql2);
    while ($key14=mysqli_fetch_array($res))
    {

 $imge_xd=$Obj_Ge->foto_logo_o($key14['IdPersona'],$base);
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
                                      <li><a class="" data-toggle="modal" data-target="#edits<?php echo $key14['IdPersona']; ?>"><i class="glyphicon glyphicon-bookmark"></i> Estado </a></li>
                                         <li><a class="" onclick="Encuestar('<?=$key14['IdPersona']?>','<?=urldecode(utf8_encode($key14['NombreSocio']));?>')"><i class="glyphicon glyphicon-signal"></i> Encuesta</a></li>
                                      <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/erpx/Componentes/c_socio_negocio/#!/detail/<?=$key14['IdPersona']?>" target="_blank"><i class="glyphicon glyphicon-user"></i> Datos Socio </a></li>
                                      
                                       <hr style="    margin-top: 0px;margin-bottom: 0px;border-top: 1px solid #075e54;">
                                      <li onclick="CambiaVendedor(<?php echo $key14['IdPersona']; ?>)" data-toggle="modal" data-target="#ModalEditVendedor"><center><?php 
                                              $VendedorAsi=$Obj_Ge->ObtVendedorAsig($key14['IdPersona'],$base);
                                            echo  ($VendedorAsi=='')?'Sin Vendedor' : $VendedorAsi;
                                      ?></center></li>
                     
                                  </ul>


              
                         
                        </div>
                      </div>

                     <a href="ocurrencias.php?IdC=<?php echo $key14['IdPersona'];?>&filtro=SI" style="text-decoration: none;"> <div class="col-sm-9 col-xs-9 sideBar-main">
                        <div class="row">
                          <div class="col-sm-9 col-xs-9 sideBar-name" style="overflow: hidden;float: left;">
                            <span class="name-meta" style=""><?php echo utf8_encode($key14['NombreSocio']) ; ?>
                          </span><br>
                     
                          <samp class="name-meta" >
                               <?php //echo utf8_encode(str_replace("<br />", "", $key14['ComentarioCompleto']));
                                        /*$string=str_replace("<br />", "", $key14['ComentarioCompleto']);
                                        echo  utf8_encode(str_replace("<br>", "",$string));*/
                                        echo strip_tags(utf8_encode($key14['ComentarioCompleto']));
                               
                               
                               ?> </samp>
                          </div>
                          <div class="col-sm-2 col-xs-2 pull-right sideBar-time hidden-xs" style='float: left!important;'>
                            <span class="time-meta pull-right" style='float: left!important;'><?php 
                          
                                $date = date_create($key14['FCrea']);
                              echo date_format($date, 'd/m/y H:i'); ?>
                          </span>
                          </div>
                          </a>
                          <?php 
                                    $estadoM=$Obj_Ge->ObtenerEstado($key14['IdPersona'],$based);
                                    //echo  ($estadoM=='')?'SIN' : $string= substr($estadoM, 0, 3);
                                    
                                    
                            ?>
                           <div class="col-sm-1 col-xs-1  " onclick="filtroPorEstado('s');" style="padding: 10px !important;">
                            <span class="badge" style="font-size:13px;background-color:<?php echo  ($estadoM['Color']=='')?'#999' : $estadoM['Color']; ?>" id="EstadoMostrado<?php echo $key14['IdPersona']; ?>">
                            <?php 
                                   echo  ($estadoM['Desc']=='')?'SIN' : $estadoM['Desc'];
                                    //echo  ($estadoM=='')?'Sin Estado' : $string= substr($estadoM, 0, 3).'.';
                                    
                                    
                            ?>
                          </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
  

<?php
 include '../includes/EstadoFiltrosNew.php';

}
    
}



/*
foreach ($res as $key14 ) 
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
                            <span class="badge" style="font-size:10px;">
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
*/

?>
    