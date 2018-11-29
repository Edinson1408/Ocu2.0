<?php

if (isset($_POST['edit'])) {
  ?>
<script type="text/javascript">
  alert('hola');
</script>
  <?php
}

session_start();
unset($_SESSION['returnpage']);
if (!isset($_SESSION["IdMiEmpresaPrincipal"]) or !isset($_SESSION['IdUsuario']) or !isset($_SESSION['bd'])) {
  $_SESSION['returnpage'] ='Ocurrencias2.0/ocurrencias.php?IdC='.$_GET['IdC'];
  header('location:../../../');
}

$baseXD=$_SESSION['bd'];

$Id_cliente=$_GET['IdC'];

include 'api/general.php';

$Obj_Ocu= new Datos;

$arr=$Obj_Ocu->dato_name($Id_cliente);
foreach ($arr as $key) 
    {
        $img=$key['1'];
        $nombre=$key['3'];
    }


?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="icon/style.css">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="icon" href="img/icon.png">


<!--Editor-->
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>










<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="includes/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container app">
  <div class="row app-one">
    <div class="col-sm-12 conversation">
      <div class="row heading" id="verde">
        <div class="col-sm-2 col-md-2 col-xs-2 heading-avatar">
          <div class="heading-avatar-icon">

            <?php
                if ($_SESSION['filtros']!="" and $_GET['filtro']=='SI') 
            {
              $vendedor="activa_filtros";
               echo '<a href="index.php?activafiltros='.$vendedor.'" class="heading-name-met" style="color:white;font-weight: 900;"><i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 20px;margin-top: 10px;"></i>';
            }
            else
            {
              echo '<a href="index.php" class="heading-name-met" style="color:white;font-weight: 900;"><i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 20px;margin-top: 10px;"></i>';
            }

            ?>
            
                    </a>
                    <?php
                    $imagen=$Obj_Ocu->foto_logo_o($Id_cliente,$baseXD);
                       //foto s/n
                            $img1="../../Preferencias/$imagen/1/Imagenes/Logo.jpg";
                            if (file_exists($img1)) {
                             $img= "<img src='../../Preferencias/$imagen/1/Imagenes/Logo.jpg' >";
                             }
                            else
                            {
                              $img=  "<img src='img/sinlogo.jpg'>";

                            }


                    ?>
                   
            
          </div>
        </div>
        <div class="col-sm-8 col-xs-8 heading-name" style="overflow: hidden;" >
         <p class="heading-name-meta" style="font-size: 25px;font-weight:80;"><!--<marquee>--> <?php echo utf8_encode($nombre);?><!--</marquee>-->
          </p>
        </div>

     <div class="col-sm-2 col-md-2 col-xs-2 heading-avatar" style="float: right;" >
          <div class="heading-avatar-icon" style="float: right;">
             
                              <a class="dropdown-toggle"   data-toggle="dropdown" style="float: right;" ><?php echo $img; ?></a>
                                  <ul class="dropdown-menu dropdown-menu-right" >
                                      <li><a class="" data-toggle="modal" data-target="#edits"><i class="glyphicon glyphicon-bookmark"></i> Estado </a></li>
                                       <li><a class="" onclick="Encuestar('<?php echo $Id_cliente?>','<?php echo urldecode(utf8_decode($nombre));?>')"><i class="glyphicon glyphicon-signal"></i> Encuestas</a></li>
                                      <li><a href="../c_socio_negocio/#!/detail/<?php echo $Id_cliente;?>" target="_blank"><i class="glyphicon glyphicon-user"></i> Datos Socio </a></li>
                                       <hr style="    margin-top: 0px;margin-bottom: 0px;border-top: 1px solid #075e54;">
                                      <li onclick="CambiaVendedor(<?php echo $Id_cliente; ?>)" data-toggle="modal" data-target="#ModalEditVendedor"><center><?php 
                                              $VendedorAsi=$Obj_Ocu->ObtVendedorAsig($Id_cliente,$base);
                                            echo  ($VendedorAsi=='')?'Sin Vendedor' : $VendedorAsi;
                                      ?></center></li>
                                      <li onclick="ModalAccion(<?php echo $Id_cliente; ?>)" data-toggle="modal" data-target="#ModalAccion"><center><?php 
                                              $AccionesOcurre=$Obj_Ocu->MostrarAccion($Id_cliente,$base);
                                            echo  ($AccionesOcurre=='')?'Sin Acciones' : $AccionesOcurre;
                                      ?></center></li>
                     
                                  </ul>

          </div>  
                             
         
        </div>
      </div>

      <div class="row message" id="conversation">
      



      

    
<div class="row message-body" style="visibility: hidden;">
          <div class="col-sm-12 message-main-sender">
            <div class="sender">
              <div class="message-text">
           
              </div>
              <span class="message-time pull-right">
         
              </span>
            </div>
          </div>
        </div>
      </div>





      <div class="row reply">
         <div class="col-sm-1 col-xs-1 reply-recording">
          <!--<i class="fa fa-microphone fa-2x" aria-hidden="true"></i>-->
         
          <input type="hidden" value='0' id='IdAccionhidden'>
           <span onclick="ModalAccion(<?php echo $Id_cliente;?>)" data-toggle="modal" data-target="#ModalAccion" style="font-size:20px;text-align: center;cursor: pointer;">
              <i class="material-icons" id='IconAcccion'  >
                reorder
                </i>
            </span>
          </p> 
        </div>
        <div class="col-sm-10 col-xs-10 reply-main">
          <textarea class="form-control" rows="1" id="comment" autofocus="autofocus"></textarea>
           <textarea  id="base" style="visibility: hidden;"><?php echo $Id_cliente;?></textarea>
        </div>
        <div class="col-sm-1 col-xs-1 reply-recording">
          <!--<i class="fa fa-microphone fa-2x" aria-hidden="true"></i>-->
        </div>
        <div class="col-sm-1 col-xs-1 reply-send">
        <i class="fa fa-send fa-2x" aria-hidden="true" id="addnew"></i>
        </div>
      </div>
    </div>
  </div>
</div>



            <div class="modal " id="modal-versiones">
            <div class="modal-dialog modal-lg" role="document" style="width: 50%;" >
            <div class="modal-content" style="height:auto;overflow-y: auto">
                    <div class="modal-header modal-cabecera">
                    </div>
                <div class="modal-body">
                    <div id="listFlotante"></div>
                </div>
            </div>
            </div>
            </div>
            
            
            

        <div class="modal " id="modal-calendario">
            <div class="modal-dialog modal-lg" role="document" style="width: 90%;" >
            <div class="modal-content" style="height:auto;overflow-y: auto">
                    <div class="modal-header modal-cabecera">
                    </div>
                <div class="modal-body">
                    <div id="listFlotante-cal"></div>
                </div>
            </div>
            </div>
            </div>
            
            
            
 
  <div class="modal fade" id="ModalEditVendedor" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div id="CambiarVendedorModal">
                
        </div>
      
      </div>
    </div>
  </div>
             
            
      <!--accciones de ocurrencias-->
  <div class="modal fade" id="ModalAccion" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div id="AccionesOcurrencias">
                
        </div>
      
      </div>
    </div>
  </div>       
            
            
            
            
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
            

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
      
{
    "use strict";
    let start_page = 0;
    //let scrol2=$('.message::-webkit-scrollbar-track');

    const scope = $("#conversation");
    this.load = function(start) {
        $.get("api/ocurrencias.php?get", { start: start ,e :"<?php echo $Id_cliente ?>"}, function(response) {
            scope.append(response);
            start_page += 15;
        });
    };
    const win = $('.message');
    win.scroll(() => {
      console.log({scrollHeight:win.prop("scrollHeight"),scrollTop:win.prop("scrollTop"),winheight:win.height()})

        if (win.prop("scrollHeight")-win.prop("scrollTop") == win.height()) {
           this.load(start_page);
        }
      
         
    });
    this.load();
}
</script>




<script type = "text/javascript">
function CambiaVendedor(a)
{
    console.log(a);
     
     
      $.ajax({
    type: 'POST',
    url: 'php/ModalEditVendedor.php',
    data: 'IdPersona='+a,
    success: function(respuesta) {
      //Copiamos el resultado en #mostrar
      
      $('#CambiarVendedorModal').html(respuesta);
      //$('#ModalEditVendedor').modal('show');
      
      
     }
  });
     
			 
    
}

function ModalAccion(a)
{
    console.log(a);
     
     
      $.ajax({
    type: 'POST',
    url: 'php/AccionesOcurrencias.php',
    data: 'IdPersona='+a,
    success: function(respuesta) {
      //Copiamos el resultado en #mostrar
      
      $('#AccionesOcurrencias').html(respuesta);
      //$('#ModalEditVendedor').modal('show');
      
      
     }
  });
     
			 
    
}

function GuardarAccion()
    {
        console.log("GuardarAccion()");
        var IdAccion=$('#IdAccion').val();
     
            var parametro=$('#FormularioAcciones').serialize();
            console.log(parametro);
            $.ajax({
            url:'php/ActualizaAcciones.php',
            type:'POST',
            data: parametro,
            success: function(data)
            {
            
            jQuery('#IdAccionhidden').val(IdAccion);
            //SELECT *  FROM ma00 WHERE IdMaestro =  '187823'            
            //tendremos que cambiar el icono Xd
            //y llenar un imput type hidden que guardar la accion 
            $('#IconAcccion').html('');
            $('#IconAcccion').html(data);


                console.log(data);
                if (data=='1')
                {
                    
                    swal("Correcto", "La acción  actualizado", "success");
                }
            }
                    });
            
       
        
    }








  $(document).ready(function(){
    showUser();
    //Add New
    $(document).on('click', '#addnew', function(){
      if ($('#comment').val()==""){
        alert('Escribir una nueva ocurrencia');
      }
      else{
          if(jQuery('#IdAccionhidden').val()=='0')
          {
              alert('Seleccione una Accion de Ocurrencia');
          }
          else
          {
              
              let IdAccion=jQuery('#IdAccionhidden').val();
                $firstname=$('#comment').val();//comentatio
                  $lastname=$('#base').val();  //base
                   //document.getElementById('comment').value=""; 
                   //alert($firstname + $lastname)  ;   
                    $.ajax({
                      type: "POST",
                      url: "php/addnew.php",
                      data: {
                        firstname: $firstname,//cometario
                        lastname: $lastname,
                        IdAccion: IdAccion,
                        add: 1,
                      },
                      success: function(data){
                          console.log(data);
                        //showUser();
                        ed($lastname)
                      }
                    });
          }
    
      }
    });

    //Delete
    $(document).on('click', '.delete', function(){
      //$id=$(this).val();
      $b="<?php echo $Id_cliente;?>";
      var $idMuro = $(this).parents(".message-text").find("#edis").val();
      //$idMuro=$('#edis').val();
      //console.log($idMuro)
      //alert($idMuro);

       $.ajax({
          type: "POST",
          url: "php/delete.php",
          data: {
            id: $idMuro,
            del: 1,
  
          },
          success: function(){
            ed($b)
          }
        });
    });

//enviar mensaje 
/* $(document).on('click', '.enviar', function(){
      //$id=$(this).val();
      //$b="<?php echo $Id_cliente;?>";
      //var $idMuro = $(this).parents(".message-text").find("#edis").val();
      //$idMuro=$('#edis').val();
      //console.log($idMuro)
      //alert($idMuro);
      $b="<?php echo $Id_cliente;?>"; //cleinte 
      var $idMuro = $(this).parents(".message-text").find("#edis").val(); ////id muro , pra poder buscar la liena y sacar la IdPersona

       $.ajax({
          type: "POST",
          url: "php/enviar_correo.php",
          data: {
            id: $b,
            del: $idMuro,
            nom:'<?php echo $nombre; ?>',
  
          },
          success: function(data){
            //console.log('se pudo');
            //$(".message-body[data-id='"+$uid+"']").find("#mensaje").html($ufirstname);
//            ed($ulastname);
              swal("Se envio su mensaje!", "", "success");
          },error: function(error){
            //console.log('erro perro');
//            ed($ulastname);
          swal("No se envio su mensaje!", "", "error");
          }
        });
    });*/

//enviar correo
    $(document).on('click', '.enviar', function(){
      $uid=$(this).val();
      $b="<?php echo $Id_cliente;?>";
      $('#correo'+$uid).modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
      $ufirstname=$('#cuerpocorreo'+$uid).val();//estado
      //$ulastname=$('#ulastname'+$uid).val(); //cliente
      $asunto= $('#asunto'+$uid).val();//asunto
      $correo1=$('#correo1'+$uid).val();
      $correo2=$('#correo2'+$uid).val();
      $correos=$('#correos'+$uid).val();
      //alert($correo1);
      //alert($correo2);
      $(".modal").hide();
      $('.close_modal').click();
     // alert($ulastname);
        $.ajax({
          type: "POST",
          url: "php/enviar_correo.php",
          data: {
            id: $uid,//id_muro
            firstname: $ufirstname, //mensaje
            //lastname: $ulastname,
            asunto:$asunto,
            correo1:$correo1,
            correo2:$correo2,
            correos:$correos,
            cliente:$b,

            edit: 1,
          },
         success: function(data){
            //console.log('se pudo');
            //$(".message-body[data-id='"+$uid+"']").find("#mensaje").html($ufirstname);
//            ed($ulastname);
              swal("Se envio su mensaje!", "", "success");
          },error: function(error){
            //console.log('erro perro');
//            ed($ulastname);
          swal("No se envio su mensaje!", "", "error");
          }
      
        });
    });
  



//update estado
    $(document).on('click', '.updatestatus', function(){
      $uid=$(this).val();
      $('#edits'+$uid).modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
      $ufirstname=$('#ufirstname'+$uid).val();//estado
      $ulastname=$('#ulastname'+$uid).val(); //cliente
        $.ajax({
          type: "POST",
          url: "php/updateEstado.php",
          data: {
            id: $uid,
            firstname: $ufirstname,
            lastname: $ulastname,
            edit: 1,
          },
            success: function(){
            ed($ulastname)
          }
      
        });
    });
  
 









   
  
  });
  
  function ed($ulastname)
  {
     window.location.replace("ocurrencias.php?IdC="+$ulastname);
  }

  //Showing our Table
  function showUser(){
    $.ajax({
      url: '',
      type: 'POST',
      async: false,
      data:{
        
      },
      success: function(response){
        $('#nope').html(response);
      }
    });
  }
 
</script>

<script type="text/javascript">


        Envia_documento = function (tipoDoc, id,IdEmpresa,$FTip) {
            console.log("id: " + id + " tipo decumento " + tipoDoc + " idemp " + IdEmpresa);
            url_doc(tipoDoc, id,IdEmpresa,$FTip);
            //console.log($FTip);
        }

        url_doc = function (TipoDoc, IdLista,IdEntEmpresa,$FTip,callback=null) {
          //console.log("id: " + IdLista + " tipo decumento " + TipoDoc + " idemp " + IdEntEmpresa);
       var rut='../../';
       var UrlDoc;
       if (TipoDoc == 13) {
           jQuery.getJSON(rut+"p/CifrarIdDoc.php", {IdLista: IdLista, Request: "Cifrar", TipoDoc: TipoDoc},
           function (data) {
               UrlDoc = rut+'p/?d=' + data.Td + 'and' + data.Id + 'and' + '' + 'sky' + data.Org;
               var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
               var titulo = "Comprobantes";
               //console.log(UrlDoc) ;
               callback(UrlDoc);
           });
          }/*else if (TipoDoc == 121 ){   
            var NomDoc='ReciboInterno.php';
            UrlDoc=rut+'Componentes/Print/'+NomDoc+'?Id='+IdLista+'&TipoDoc='+TipoDoc; 
            var especificaciones="top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
            var titulo="Comprobantes";
            window.open(UrlDoc,titulo,especificaciones);

       } */else if (TipoDoc == 3) {
           var NomDoc = 'Boleta.php';
            UrlDoc = rut+'Componentes/Print/' + NomDoc + '?Id=' + IdLista + '&TipoDoc=' + TipoDoc + '&IdEmpresa=' + IdEntEmpresa;
           var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
           var titulo = "Comprobantes";
           //window.open(UrlDoc, titulo, especificaciones);
             callback(UrlDoc);
       } else if (TipoDoc == 1) {

           //console.log($FTip);
           if ($FTip=='E') {
                         var NomDoc = 'Factura.php';
                          UrlDoc = rut+'Componentes/Print/' + NomDoc + '?Id=' + IdLista + '&TipoDoc=' + TipoDoc + '&IdEmpresa=' + IdEntEmpresa;
                         var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
                         var titulo = "Comprobantes";
                         //window.open(UrlDoc, titulo, especificaciones);
                  
                          }
          
          if ($FTip=='F') {
                 jQuery.getJSON(rut+"p/CifrarIdDoc.php", { IdLista: IdLista, Request: "Cifrar", TipoDoc: TipoDoc},
                 function(data){
                      UrlDoc = rut+'p/?d=' + data.Td + 'and' + data.Id + 'and' + '' + 'sky' + data.Org+'skyTal';
                     var especificaciones="top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
                     var titulo="Comprobantes";
                     ///window.open(UrlDoc,titulo,especificaciones);
                     callback(UrlDoc);
                });
                 }
          if ($FTip=='0') {
                   var NomDoc = 'Factura.php';
                          UrlDoc = rut+'Componentes/Print/' + NomDoc + '?Id=' + IdLista + '&TipoDoc=' + TipoDoc + '&IdEmpresa=' + IdEntEmpresa;
                         var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
                         var titulo = "Comprobantes";
                         //window.open(UrlDoc, titulo, especificaciones);
                     callback(UrlDoc);
          }

       } else {
           jQuery.getJSON(rut+"p/CifrarIdDoc.php", {IdLista: IdLista, Request: "Cifrar", TipoDoc: TipoDoc},
           function (data) {
                UrlDoc = rut+'p/?d=' + data.Td + 'and' + data.Id + 'and' + '' + 'sky' + data.Org;
               var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
               var titulo = "Comprobantes";
               //window.open(UrlDoc, titulo, especificaciones);
              callback(UrlDoc);
           });
       }
   }


//esto es para la ventana XD




       clickdocumento = function (tipoDoc, id,IdEmpresa,$FTip) {
            console.log("id: " + id + " tipo decumento " + tipoDoc + " idemp" + IdEmpresa);
            link(tipoDoc, id,IdEmpresa,$FTip);
            //console.log($FTip);
        }

ImprimirReciboCtas=function(IdOperacionCB,IdOperacionDet,IdCajaBco,DocSerieDocumento,DocNroDocumento,TiDocOrigen){
    var rut='../../';
    jQuery.getJSON(rut+"p/CifrarIdDoc.php", { IdLista: IdOperacionCB, Request: "Cifrar", TipoDoc: "BancoOperaciones"},
    function(data){
        UrlDoc = rut+'p/?d=' + data.Td + 'and' + data.Id + 'and' + '' + 'sky' + data.Org;
        var especificaciones="top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
        var titulo="Comprobantes";
        window.open(UrlDoc,titulo,especificaciones);
    });
}

  link = function (TipoDoc, IdLista,IdEntEmpresa,$FTip) {
       var rut='../../';

       if (TipoDoc == 13) {
           jQuery.getJSON(rut+"p/CifrarIdDoc.php", {IdLista: IdLista, Request: "Cifrar", TipoDoc: TipoDoc},
           function (data) {
               UrlDoc = rut+'p/?d=' + data.Td + 'and' + data.Id + 'and' + '' + 'sky' + data.Org;
               var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
               var titulo = "Comprobantes";
               window.open(UrlDoc, titulo, especificaciones);
           });
          }/*else if (TipoDoc == 121 ){   
            var NomDoc='ReciboInterno.php';
            UrlDoc=rut+'Componentes/Print/'+NomDoc+'?Id='+IdLista+'&TipoDoc='+TipoDoc; 
            var especificaciones="top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
            var titulo="Comprobantes";
            window.open(UrlDoc,titulo,especificaciones);

       } */
       
       else if (TipoDoc == 7 || TipoDoc == 8) {
           var NomDoc = 'NotaDebito.php';
           UrlDoc = rut+'Componentes/Print/' + NomDoc + '?Id=' + IdLista + '&TipoDoc=' + TipoDoc + '&IdEmpresa=' + IdEntEmpresa;
           var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
           var titulo = "Comprobantes";
           window.open(UrlDoc, titulo, especificaciones);
       }
       else if (TipoDoc == 3) {
           var NomDoc = 'Boleta.php';
           UrlDoc = rut+'Componentes/Print/' + NomDoc + '?Id=' + IdLista + '&TipoDoc=' + TipoDoc + '&IdEmpresa=' + IdEntEmpresa;
           var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
           var titulo = "Comprobantes";
           window.open(UrlDoc, titulo, especificaciones);
       } else if (TipoDoc == 1) {
           switch ($FTip) {
               case 'E':
                    var NomDoc = 'Factura.php';
                     UrlDoc = rut+'Componentes/Print/' + NomDoc + '?Id=' + IdLista + '&TipoDoc=' + TipoDoc + '&IdEmpresa=' + IdEntEmpresa;
                     var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
                     var titulo = "Comprobantes";
                     window.open(UrlDoc, titulo, especificaciones);
                   break;
               case 'F':
                   jQuery.getJSON(rut+"p/CifrarIdDoc.php", { IdLista: IdLista, Request: "Cifrar", TipoDoc: TipoDoc},
                     function(data){
                         UrlDoc = rut+'p/?d=' + data.Td + 'and' + data.Id + 'and' + '' + 'sky' + data.Org+'skyTal';
                         var especificaciones="top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
                         var titulo="Comprobantes";
                         window.open(UrlDoc,titulo,especificaciones);
                     });
                break;
               default:
                 var NomDoc = 'Factura.php';
                 UrlDoc = rut+'Componentes/Print/' + NomDoc + '?Id=' + IdLista + '&TipoDoc=' + TipoDoc + '&IdEmpresa=' + IdEntEmpresa;
                 var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
                 var titulo = "Comprobantes";
                 window.open(UrlDoc, titulo, especificaciones);
                 break;
                   // code
           }

           //console.log($FTip);
           /*f ($FTip=='E') {
                         var NomDoc = 'Factura.php';
                         UrlDoc = rut+'Componentes/Print/' + NomDoc + '?Id=' + IdLista + '&TipoDoc=' + TipoDoc + '&IdEmpresa=' + IdEntEmpresa;
                         var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
                         var titulo = "Comprobantes";
                         window.open(UrlDoc, titulo, especificaciones);
                          }
          
          if ($FTip=='F') {
                 jQuery.getJSON(rut+"p/CifrarIdDoc.php", { IdLista: IdLista, Request: "Cifrar", TipoDoc: TipoDoc},
                 function(data){
                     UrlDoc = rut+'p/?d=' + data.Td + 'and' + data.Id + 'and' + '' + 'sky' + data.Org+'skyTal';
                     var especificaciones="top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
                     var titulo="Comprobantes";
                     window.open(UrlDoc,titulo,especificaciones);

                });
                 }*/
          /*if ($FTip=='0') {
                   var NomDoc = 'Factura.php';
                         UrlDoc = rut+'Componentes/Print/' + NomDoc + '?Id=' + IdLista + '&TipoDoc=' + TipoDoc + '&IdEmpresa=' + IdEntEmpresa;
                         var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
                         var titulo = "Comprobantes";
                         window.open(UrlDoc, titulo, especificaciones);
          }*/

       } else {
           jQuery.getJSON(rut+"p/CifrarIdDoc.php", {IdLista: IdLista, Request: "Cifrar", TipoDoc: TipoDoc},
           function (data) {
               UrlDoc = rut+'p/?d=' + data.Td + 'and' + data.Id + 'and' + '' + 'sky' + data.Org;
               var especificaciones = "top=0,left=0,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no, width=900,height=600";
               var titulo = "Comprobantes";
               window.open(UrlDoc, titulo, especificaciones);
           });
       }
   }

</script>
<script>
    Encuestar=function(IdPersona, NombreSocio)
		{
		    
		    console.log('eee');
			 var param = "IdPersona="+IdPersona;
			 jQuery('#listFlotante').load("../Encuestas/FormEncuesta.php",param,function(){
				 /*jQuery('#listFlotante').dialog({ width:500,height:508});
				 jQuery('#listFlotante').dialog({'title':'Encuestando a '+NombreSocio});
				 jQuery('#listFlotante').dialog('open');	*/		  
			 });
			 
			 $('#modal-versiones').css({display:'block'});

		}
		
calendario=function(IdPersona)
		{
		    console.log(IdPersona);
			 var param = IdPersona;
			 jQuery('#listFlotante-cal').load("calendario_index1.php",param,function(){
				 /*jQuery('#listFlotante').dialog({ width:500,height:508});
				 jQuery('#listFlotante').dialog({'title':'Encuestando a '+NombreSocio});
				 jQuery('#listFlotante').dialog('open');	*/		  
			 });
			 
			 $('#modal-calendario').css({display:'block'});

		}
		
abrir_cal=function(a,b)
{
    
    
    if (a==<?php echo $_SESSION['IdPersona']?>)
    {
        
        window.open(b, 'mywin','left=20,top=20,width=800,height=600,toolbar=1,resizable=0')
    }
    else
    {
        swal({
              title: "Error",
              text: "Usted no es el usuario que agendo la ocurrencia",
              icon: "error",
              button: "Cancelar",
            });
    }
    
    
    
}
	  function GuardarVendedor()
    {
        console.log("GuardarVendedor()");
        var IdVendedor=$('#IdVendedlor').val();
        if(IdVendedor=='NA')
        {
            console.log('No se hace nada Xd');
        }
        else
        {
            var parametro=$('#FormularioVendedor').serialize()+"&IdVendedor="+IdVendedor;
            
            $.ajax({
            url:'php/ActualizaVendedor.php',
            type:'POST',
            data: parametro,
            success: function(data)
            {
                console.log(data);
                if (data=='1')
                {
                    
                    swal("Correcto", "El vendedor se  actualizado", "success");
                }
            }
        });
            //console.log('ejecutamos un ajax que cambien el valor');
            //console.log($('#FormularioVendedor').serialize());
        }
        
    }
    
</script>




<?php 
include('includes/modal_editar_es.php');
?>
