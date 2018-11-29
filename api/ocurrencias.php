<?php 
///header("Access-Control-Allow-Origin: * ")
class LazyLoad 
{
  public $link;

  public function __construct(){
   include 'conexion.php';
   /* $this->link=mysqli_connect("localhost","root","desarrollo","");
    call_user_func(array($this,array_keys($_REQUEST)[0])); */ 
  }

 function DatosRecibo($Id, $origen){// CONSULTA PARA OBTENER EL ID DE OPERACION EN CARTEDA DE COBROS Y PAGOS
     $based=$_SESSION['bd'];
     if($origen == 3 || $origen == 5){
        $sqlCta = "SELECT cb.IdCajaBco,op.IdOperacion, op_d.IdOperacionDet as IdOperacionDet,op_d.IdCta, op_d.TipoOperacion,op_d.DocSerieDocumento,op_d.DocNroDocumento,op_d.TiDocOrigen, (SELECT TipoDoc FROM $based.ctas_cobrar WHERE IdCtaCobrar=$Id) IdTipoDoc FROM $based.caja_banco cb, $based.fin_caja_banco_oper_det op_d, $based.fin_caja_banco_oper op WHERE op.IdOperacion=op_d.IdOperacion AND op.TipoOperacion = 'Ingreso' AND cb.IdCajaBco=op.IdCajaBco AND op_d.IdCta=$Id AND op_d.DocSerieDocumento=(SELECT Serie FROM $based.ctas_cobrar WHERE IdCtaCobrar= $Id) AND op_d.DocNroDocumento=(SELECT NumDoc FROM $based.ctas_cobrar WHERE IdCtaCobrar=$Id) AND op_d.TiDocOrigen=(SELECT Abreviatura FROM $based.tipo_documentos WHERE TipoDoc = 3 AND Codigo=(SELECT TipoDoc FROM $based.ctas_cobrar WHERE IdCtaCobrar=$Id))";
        $q = mysqli_fetch_assoc( mysqli_query($this->link, $sqlCta) );
     }else if($origen == 4 || $origen == 6){
         $sqlCta = "SELECT cb.IdCajaBco,op.IdOperacion, op_d.IdOperacionDet as IdOperacionDet,op_d.IdCta, op_d.TipoOperacion,op_d.DocSerieDocumento,op_d.DocNroDocumento,op_d.TiDocOrigen, (SELECT TipoDoc FROM $based.ctas_pagar WHERE IdCtaPagar=".$Id.") IdTipoDoc FROM $based.caja_banco cb, $based.fin_caja_banco_oper_det op_d, $based.fin_caja_banco_oper op WHERE op.IdOperacion=op_d.IdOperacion AND op_d.TipoOperacion = 'Egreso' AND cb.IdCajaBco=op.IdCajaBco AND op_d.IdCta=(SELECT IdCtaPagar FROM $based.ctas_pagar WHERE IdCtaPagar=".$Id.")";
         
         $q = mysqli_fetch_assoc( mysqli_query($this->link, $sqlCta) );
     }
     return $q;
} 
  private function get(){
    $Cliente=$_REQUEST['e'];

      session_start();
      $based=$_SESSION['bd'];
      $id_empresa_principal= $_SESSION["IdMiEmpresaPrincipal"];

    if(!isset($_REQUEST['start'])):
      $_REQUEST['start']=0;
    endif;

    //verificacion del usuario , para saber su es nivel 4 o 3 nivel 4 = no , nicvel 3 = Si 
    // si cumple estas condifiones entonces , va  a mopstrar solo sus ocurrencias generadas 
     $nivel_usurario=$_SESSION['JefeArea'];
          if ($nivel_usurario=='No' or $nivel_usurario=='Si' ) 
          {
              //$id_de_persona=$this->obtner_id_usuario_crea($_SESSION['LoginEmailValido'],$based); 
              $id_de_persona=$_SESSION['IdUsuario'];
              
              $condicional_nivel=" and a.IdUserCrea='$id_de_persona'  ";
          }

        function parce($campo,$link){  //filtra caracteres extraños evitando inyecciones sql
            $Ctratado = mysqli_real_escape_string($link,$campo);
            return $Ctratado;
        }

      $sql="SELECT a.IdMuro,a.comentario,a.FCrea ,b.nombre,a.DocOrigen,a.IdUserCrea,a.IdMiEmpresa,a.Origen,a.url_cal from $based.muro a, $based.persona b where IdCliente='".parce($Cliente,$this->link)."'
          and a.IdCliente=b.IdPersona  $condicional_nivel  order by  a.FCrea desc limit {$_REQUEST['start']},15";

    /* $sql="SELECT * FROM controlx.organizaciones limit {$_REQUEST['start']},15"; */


    $request=mysqli_query($this->link,$sql);

?>
<div id="supremo">
<?php

    while ($res=mysqli_fetch_array($request)):
    /*while($row=mysqli_fetch_object($request)):
      $row->Nombre=utf8_encode($row->Nombre);
      /*$row->NameDB=utf8_encode($row->NameDB);
      $row->CodOrg=utf8_encode($row->CodOrg);
      /*$row->Direccion=utf8_encode($row->Direccion);*/
                                $HoraF=date('H')+1;

                                $evento = array(
                                    'titulo' => utf8_encode($res['3']),
                                    'descripcion' => utf8_encode($res['1']),
                                    'localizacion' => 'Dirección del evento',
                                    'fecha_inicio' => date('Y-m-d'),//'2016-04-10', // Fecha de inicio de evento en formato AAAA-MM-DD
                                    'hora_inicio'=>date('H:i'), // Hora Inicio del evento
                                    'fecha_fin'=> date('Y-m-d'),//'2016-04-12', // Fecha de fin de evento en formato AAAA-MM-DD
                                    'hora_fin'=>$HoraF.date(':i'), // Hora final del evento
                                    'nombre'=>'Skynet ERP', // Nombre del sitio
                                    'url'=>'www.skyneterp.com', // Url de la pÃ¡gina
                                    'id_muro'=>$res['0'] // Url de la pÃ¡gina
                                );
    //foto del usuario que crea XDDXDXXD
   $img_persona=$this->Img_User_Crea($res['5'],$based); 
    $im_ruta="../../../Preferencias/Citrix/1/Archivos/$img_persona";
    if (file_exists($im_ruta)) {
         $ruta="../../Preferencias/Citrix/1/Archivos/$img_persona";
       }else{$ruta="https://thumbs.dreamstime.com/b/icono-an%C3%B3nimo-del-usuario-89671074.jpg";
     }

    if (!isset($img_persona)) {
                   $ruta="https://thumbs.dreamstime.com/b/icono-an%C3%B3nimo-del-usuario-89671074.jpg";
                 }   


    ?>
          <div class="row message-body" data-id="<?php echo $res['0'] ?>">
          <div class="col-sm-12 message-main-receiver">
            <div class="receiver">
              <div class="message-text">
                  
                  <?php 
                        if($res['8']=='' or $res['8']==null)
                        {
                            
                        }else {
                  ?>
                  
                  <a href="<?php echo urldecode($res['8']);?>"  onclick="window.open(this.href, 'mywin','left=20,top=20,width=800,height=600,toolbar=1,resizable=0'); return false;"><span class="glyphicon glyphicon-list-alt"></span></a>
                  <?php 
                        }
                  
                  ?>
                  
              <a class="dropdown">
                  <a class=" dropdown-toggle" type="button" data-toggle="dropdown">
                      
                  <img src="<?php echo $ruta ?>" class="img-circle" style="width: 50px;height: 50px;cursor: pointer"></a>
                  <ul class="dropdown-menu">
                    <!--<li><a href="<?php echo $this->getGCalendarUrl($evento); ?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=800,height=600,toolbar=1,resizable=0'); return false;" width="800px" height="600px"><i class = "glyphicon glyphicon-list-alt"></i> Calendario </a></li>-->
                    <!--calendario de prueba-->
                     <?php 
                        if($res['8']=='' or $res['8']==null)
                        { ?>
                     <li><a href="<?php echo $this->getGCalendarUrl1($evento); ?>" onclick="window.open(this.href, 'mywin','left=20,top=20,width=800,height=600,toolbar=1,resizable=0'); return false;" width="800px" height="600px"><i class = "glyphicon glyphicon-list-alt"></i> Calendario</a></li>   
                <?php
                            
                        }
                  ?>
                  
                   

                 
                   
                    <?php       
                        if ($res['7']=='' || $res['7']==null) { //solo si es una ocurrencia sin documento 
                          if ($_SESSION['JefeArea']=='S0' || $_SESSION['JefeArea']=='S1' || $_SESSION['JefeArea']=='S2') {  //si es una ocurencia sin docuemtno evalua el livel y dejara eliminar    
                      ?>
                          <li><a class="" data-toggle="modal" data-target="#edit<?php echo $res['0'];?>"><i class = "glyphicon glyphicon-pencil"></i>  Editar </a></li>
                          <li><a class="delete" ><i class = "glyphicon glyphicon-trash"></i>  Eliminar   </a></li>
                      <?php     
                        } else {  //si no es usuario 1 o 2 o 0 entonces validara si el que creo esta ocurrencia es el usuario o no 
                              if ($_SESSION['IdUsuario']==$res['5']) 
                                    { ?>
                                          <li><a class="" data-toggle="modal" data-target="#edit<?php echo $res['0'];?>"><i class = "glyphicon glyphicon-pencil"></i>  Editar </a></li>
                                          <li><a class="delete" ><i class = "glyphicon glyphicon-trash"></i>  Eliminar  </a></li>        

                                   <?php   
                                    }
                              }
                      }
                    ?>
                    
                    
                    <li><a class="" data-toggle="modal" data-target="#correo<?php echo $res['0'];?>" ><i class = "glyphicon glyphicon-envelope"></i> Enviar </a></li>
                  </ul>
                  </a>
                  <input type="" name="" value="<?php echo $res['0']; ?>" id="edis" style="visibility: hidden;width: 0px;" >
                          <span id="mensaje" class="mensaje<?php echo $res['0']; ?>">

                        <!--<div class="txtArea" name="cont_documento" id="cont_documento_<?php //echo $res['0']; ?>" style="" > -->
                                     <?php 
                                            echo '('.$res['0'].')';
                                         list($Id, $TipoDocu, $Numero, $Estado) = explode(':', $res['4']);
                                            
                                            $variable = explode('<span',$res['1']);
                                            $ftip = explode(':', $res['4']);//$ftip=substr($variable[1], 27, 1);
                                            $ftip = substr($ftip[2], 0, 1);
                                        ?>  
                                    <?php if($res['Origen'] == 3 || $res['Origen'] == 4 || $res['Origen'] == 5 || $res['Origen'] == 6):?>
                                    <!--MENSAJE PERSONALIZADO PARA CARTERA DE COBROS Y PAGOS-->
                                    <?php
                                        $d = explode("desde", $variable[1]); //OBTENIENDO STRING DESDE LA ORACION "DESDE" DEL MENSAJE
                                        $cta = $this->DatosRecibo($Id, $res['Origen']);
                                    ?>
                                    <?php echo utf8_encode($variable[0]);?>
                                    <div id='documento_completo_<?php echo $res['0']; ?>' onclick="ImprimirReciboCtas('<?php echo $cta['IdOperacion']?>','<?php echo $cta['IdOperacionDet']?>', '<?php echo $cta['IdCajaBco']?>', '<?php echo $cta['DocSerieDocumento']?>', '<?php echo $cta['DocNroDocumento']?>', '<?php echo $cta['TiDocOrigen']?>')" style="display:inline; cursor:pointer">
                                    <?php echo  utf8_encode("<span".$d[0])?>
                                    </div>
                                    <?php echo utf8_encode(" desde ".$d[1])?>
                                    <!-- MENSAJE PARA NOTAS DE DEBITO Y CREDITO -->
                                    <?php elseif($TipoDocu == 8 || $TipoDocu == 7):?>
                                    <?php $d = explode(",", $variable[1]); //OBTENIENDO STRING DESDE LA ORACION "DESDE" DEL MENSAJE 
                                    ?>
                                   <?php echo utf8_encode($variable[0]);?>
                                   <div id='documento_completo_<?php echo $res['0']; ?>' onclick="clickdocumento('<?php echo $TipoDocu ?>', '<?php echo $Id; ?>',<?php echo  $res['6'];?>,'<?php echo $ftip;?>')" style="display:inline; cursor:pointer">
                                    <?php echo  utf8_encode("<span".$d[0]);?>
                                    </div>
                                    <?php echo  utf8_encode(", ".$d[1]);?>
                                    <?php else:?>
                                   <?php echo utf8_encode($variable[0]);?>
                                   <div id='documento_completo_<?php echo $res['0']; ?>' onclick="clickdocumento('<?php echo $TipoDocu ?>', '<?php echo $Id; ?>',<?php echo  $res['6'];?>,'<?php echo $ftip;?>')" style="display:inline; cursor:pointer">
                                    <?php echo  utf8_encode("<span".$variable[1]); 
                                     
                                    ?>
                                    </div>
                                    <!--aqui pondre las cosas de los agendaciones-->
                                    <?php
                                    echo $this->historirial_calendar($res['0'],$based);
                                    ?>
                                    <?php endif;?>

                          <!--  </div> -->

                          </span>
                </div>
              <span class="message-time pull-right">
                  <i class="material-icons">
                    <?php 
                    
                    $this->AccionIcon($res['0'],$based);
                    ?>
                    </i>
              <?php   $date = date_create($res['2']);
                echo date_format($date, 'd-m-y H:i');
              ?>
              </span>
            
            </div>    
            

                             
          </div>
         
        </div>

    <?php
    include '../includes/modal_editar.php';
    include '../includes/modal_correos.php';
    endwhile;
    ?>
</div>
    <?php 
  }

public function AccionIcon($IdMuro,$base)
{
    $Sql="SELECT AuxDet1  FROM $base.ma00 WHERE IdMaestro =(SELECT IdAcciono FROM $base.muro where IdMuro='$IdMuro')";
    $res=mysqli_query($this->link,$Sql);
    $r=mysqli_fetch_object($res);
    echo $r->AuxDet1;
}


public function getGCalendarUrl($event){  
$titulo = urlencode($event['titulo']); 
$descripcion = urlencode($event['descripcion']); 
$localizacion = urlencode($event['localizacion']); 
$start=new DateTime($event['fecha_inicio'].' '.$event['hora_inicio'].' '.date_default_timezone_get()); 
$end=new DateTime($event['fecha_fin'].' '.$event['hora_fin'].' '.date_default_timezone_get()); $dates = urlencode($start->format("Ymd\THis")) . "/" . urlencode($end->format("Ymd\THis"));
$name = urlencode($event['nombre']);
$url = urlencode($event['url']);
$gCalUrl = "http://www.google.com/calendar/event?action=TEMPLATE&amp;text=$titulo&amp;dates=$dates&amp;details=$descripcion&amp;location=$localizacion&amp;trp=false&amp;sprop=$url&amp;sprop=name:$name";
return ($gCalUrl);
}

public function getGCalendarUrl1($event){  
$titulo = urlencode($event['titulo']); 
$descripcion = urlencode($event['descripcion']); 
$localizacion = urlencode($event['localizacion']); 
$start=new DateTime($event['fecha_inicio'].' '.$event['hora_inicio'].' '.date_default_timezone_get()); 
$end=new DateTime($event['fecha_fin'].' '.$event['hora_fin'].' '.date_default_timezone_get()); $dates = urlencode($start->format("Ymd\THis")) . "/" . urlencode($end->format("Ymd\THis"));
$name = urlencode($event['nombre']);
$url = urlencode($event['url']);

$id_muro = urlencode($event['id_muro']);

$miArray=array("text"=>array("1500", "2000"));
$gCalUrl = "calendario_index1.php?text=$titulo&amp;dates=$dates&amp;details=$descripcion&amp;id_muro=$id_muro&amp;";
return ($gCalUrl);
}


public function Img_User_Crea($id_persona,$base)
{
  
     // $sql3="SELECT IdPersona FROM  $base.usuarios_skynet  WHERE IdUsuario ='$id_persona'";

  $sql3="SELECT IdPersona FROM  $base.usuarios_skynet  WHERE IdUsuario ='$id_persona'";
        $request3=mysqli_query($this->link,$sql3);
        while ($res3=mysqli_fetch_array($request3))
      {
          $personaC=$res3['0'];
      }

      //$sql4="SELECT NomSistema FROM $base.ficheros WHERE IdMod=5 AND IdDoc=" . $personaC . " AND IdMiEmpresa=" . $_SESSION['IdMiEmpresa'] . " AND Extencion='jpg' ORDER BY IdFiles desc LIMIT 1";
     $sql4=" SELECT NomSistema FROM $base.ficheros WHERE IdMod=5 AND IdDoc='$personaC' AND IdMiEmpresa='".$_SESSION["IdMiEmpresaPrincipal"]."' AND Extencion='jpg' ORDER BY IdFiles desc LIMIT 1";
       $request4=mysqli_query($this->link,$sql4);
        while ($res4=mysqli_fetch_array($request4))
      {
          $img_S=$res4['0'];
      }

      return $img_S;
}

public function Mensaje_a_enviar($base,$id_muro)
{
    $sql5="SELECT a.IdUserCrea , b.IdUsuario,b.IdPersona,c.IdPersona , b.EmailUsuario as email,c.Login,c.Nombre,a.IdCliente,(select p.nombre from $base.persona p where p.IdPersona=a.IdCliente)
            from $base.muro a, $base.usuarios_skynet b, $base.persona c where a.IdUserCrea=b.IdUsuario and b.IdPersona=c.IdPersona and a.IdMuro =  '$id_muro';";

        $request5=mysqli_query($this->link,$sql5);
        while ($res5=mysqli_fetch_array($request5))
         { 
            $corr1=$res5['4'];
            $corr2=$res5['5'];
            $nombre_persona=$res5['6'];
            $nom_empresa=$res5['8'];
           }

           return array($nombre_persona, $nom_empresa, $corr1,$corr2);

         


}

 
public function encryptx($string, $key) {
   $result = '';
         for($i=0; $i<strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key))-1, 1);
            $char = chr(ord($char)+ord($keychar));
            $result.=$char;
         }
      return base64_encode($result);
}

public function  docuemto_electronico($tipodoc,$IdDoc)
{
    session_start();

        $idtabla  = ($tipodoc=='1' || $tipodoc=='3') ? ' IdComprobante' : 'IdNota';
        $tabla    = ($tipodoc=='1' || $tipodoc=='3') ? ' comprobante_venta' : 'notas';

         $sqlsI = "SELECT  cv.".$idtabla." as IdComprobante ,TipoDoc, cv.IdMiEmpresa, cv.IdMiSede, cv.NomCliente,  cv.EstadoEFAC , CONCAT(cv.Serie, '-', cv.NumDoc) as Num_Factura,  cv.XML, cv.FCrea , cv.Igv, cv.simboloMoneda, cv.Total ,cv.ContactoCliente FROM  ".$_SESSION['bd'].".".$tabla." cv WHERE  cv.EstadoEFAC = '1' and cv.".$idtabla."=$IdDoc";
        $infoI = mysqli_fetch_assoc(mysqli_query($this->link, $sqlsI));
 

        // END GET DATOS PRINCIPALES
        /*NUEVA URL ORGANIZACIÓN */
        $sqlp               = "SELECT * FROM controlx.organizaciones WHERE CodOrg ='".$_SESSION['CodigoOrganizacion']."'";
        $resultado          = mysqli_query($this->link, $sqlp);
        $row45              = mysqli_fetch_assoc($resultado);
        $codigo_org         = $row45['IdOrg'];
        
        $org= $_SESSION['CodigoOrganizacion'];
        $orgx=  $this->encryptx($org, 'Greed');
        $IdDocx = $this->encryptx($IdDoc, 'Greed');
        $Tipodoc = $this->encryptx($infoI['TipoDoc'], 'Greed');
        //$IdDoc = encrypt($_SERVER['HTTP_HOST']."-".$IdDoc, 'Greed');
        return $hrefI="http://fac.gestionx.com/?e=".$infoI['IdMiEmpresa'].'.'.$codigo_org.'&p='.$Tipodoc."and".urlencode($IdDocx)."andsky".$orgx."skyTal";
        //$hrefII = "http://fac.gestionx.com/?d=1.56&p=lQ==andln6kandskyx7Dm187cq9fS1A==skyTal&pdf=1";

}

public function historirial_calendar($id_muro,$base)
{
    
    $sql_cal="SELECT a.*,b.Nombre from $base.historial_calendar a, $base.persona b  where a.idUserCreaCal=b.IdPersona and a.idMuro='$id_muro';";
    
    $request_cal=mysqli_query($this->link,$sql_cal);
     
        while ($res5=mysqli_fetch_array($request_cal))
         { 
                echo '<br>Agendado por : ';
                echo $res5['5'];
                echo "&nbsp<i class='glyphicon glyphicon-calendar' onclick=(abrir_cal(".$res5['2'].",'".urldecode($res5[3])."'))></i>";
             
         }

           
    
}



}
new LazyLoad;
?>