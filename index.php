



<html>
<head>
  <title>Ocurrencias 2.0</title>
  <?php
include 'includes/header.php';
session_start();
unset($_SESSION['returnpage']);
if (!isset($_SESSION["IdMiEmpresaPrincipal"]) or !isset($_SESSION['IdUsuario']) or !isset($_SESSION['bd'])) {
    $_SESSION['returnpage'] = 'Ocurrencias2.0/';
    header('location:../../../');
}
  
?>
<meta charset="utf-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

document.onkeydown = function(){
  switch (event.keyCode){
        case 116 : //F5 button
            event.returnValue = false;
            event.keyCode = 0;
            console.log('f5');
            location.href ="http://sky.gestionx.com/erpx/Componentes/Ocurrencias2.0";
            return false;
            
        case 82 : //R button
            if (event.ctrlKey){ 
                event.returnValue = false;
                event.keyCode = 0;
                return false;
            }
    }
}
</script>


<script>
  //buscar contacto
  var xhr="";
  function buscar_v(cadena){
    if (xhr!="") {
      xhr.abort();
    }
    xhr = $.ajax({
    type: 'POST',
    url: 'php/Buscar_por_vendedor.php',
    data: 'cadena=' + cadena,
    success: function(respuesta) {
      //Copiamos el resultado en #mostrar
      $('#aqui').html(respuesta);
     }
  });
  }
</script>
<script>
    //para el filtro pendejo 
    function FiltrosOcurrencias()
    {
        if(jQuery("#MALL").is(":checked")==true){
		var Estats="Todos";

	}else{
		var Estats = new Array();
		jQuery(".Maestros").each(function(){
			if(jQuery(this).is(":checked") == true){
				Estats.push(jQuery(this).val());
			}
		});
	}
	if(Estats==''){alert('Debe tener como mínimo un Filtro de Estatus');return false;}
	console.log($('#frmocu').serialize()+"&Estatus="+Estats);
	var radiotipo = $('input:radio[name=formato]:checked').val();
$.ajax({
            url:'php/FiltroSqlNew.php',
            type:'GET',
            data: $('#frmocu').serialize()+"&Estatus="+Estats,
            success: function(data)
            {
                
                if($("#NuevoId").val()=='')
                {
                    console.log("cambiando el id nuevo -> aqui")
                    document.getElementById('NuevoId').id='aqui';    
                }
                //console.log(data);
                scope=1;
                $('#aqui').html('');
                $('#aqui').html(data);
                
                //luego cambiamos el div para que no moleste el scrol paginador Xd
                console.log('cambiamos id a aqui -> nuevo Id');
                document.getElementById('aqui').id='NuevoId';
            }
        });

//window.open("php/FiltroSqlNew.php?"+$('#frmocu').serialize()+"&Estatus="+Estats,"myWin","menubar, scrollbars, left=30px, top=40px, height=700px, width=1350px"); 
        


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
<link rel="icon" href="img/icon.png">
</head>
<body>





<div class="container app">
  <div class="row app-one">
    <div class="col-sm-12 side">
      <div class="side-one">
        <div class="row heading" id="verde">
          <div class="col-sm-3 col-xs-3 heading-avatar">
            <div class="heading-avatar-icon">
              <a href="index.php" ><img src="img/logo.jpg"></a>&nbsp;&nbsp;&nbsp; 
            </div>
          </div>

         <div class="col-sm-2 col-xs-2 heading-compose " style="margin-top: 10px;">
          <a style="font-size: 20px; color: white;text-decoration: none;">Ocurrencias</a>
         </div>

          <div class="col-sm-2 col-xs-2 heading-compose  pull-right">
            <i class="fa fa-comments fa-2x  pull-right" aria-hidden="true" style="color: white"></i>
          </div>
        </div>

        <div class="row searchBox">
          <div class="col-sm-12 col-xs-12 searchBox-inner">
            <div class="form-group has-feedback">
                <div id="buscar_dinamico">
                  <?php 
                  if (isset($_GET['ve'])) 
                  { 
                      $vendedorXD=$_GET['ve'];
                    ?>
                                        <div class="col-sm-1 col-xs-2" >
                      <i class="material-icons" style="font-size:36px;float: left;">account_circle</i>
                    </div>
                      <div class="col-sm-9 col-xs-8"><input id="filtrarxd" type="text" class="form-control1" value="<?php echo $vendedorXD?>" name="searchText" id="bus" placeholder="Buscar por Vendedor" onfocus="buscar_v(this.value);" onkeyup="buscar_v(this.value);" style="background-color: #A9D0F5; border: 2px solid #5DA1F3;" >
                      </div>
                    <script type="text/javascript">
                      $('#filtrarxd').focus();
                    </script>

                  <?php      
                  }
                  else
                  {
                    ?>
                    <div class="col-sm-1 col-xs-2">
                       <md-icon class="material-icons"  style="font-size:36px;float: left;">assignment</md-icon>
                    
                    </div>
                    <div class="col-sm-9 col-xs-8">
                            <input id="filtrar" type="text"  id="bus" class="form-control1" name="searchText" placeholder="Buscar por Ocurrencia" autofocus="focus" onkeyup="buscar_ajax2(this.value);" ondblclick="addNewPartner();"/> 
                    </div>  

                    <?php

                  }
                  //echo $_SESSION['nombre_vendedor'];
                  ?>
                    

                </div>
              <div class="col-sm-2 col-xs-2">
               <!--<a class="dropdown-toggle"   data-toggle="dropdown" style="float: right;" >
                   <img src="img/Captura.PNG" style="width: 35px;height: 35px; cursor: pointer;" >
                </a>-->
                    <!--<ul class="dropdown-menu dropdown-menu-right" >
                                      <li style="cursor: pointer;"><a href="index.php"><i class="material-icons" >assignment</i>Por ocurrencia </a></li>
                            <?php 
                             if($_SESSION['JefeArea']=='No')
                                {}
                            else { ?>
                                <li style="cursor: pointer;"><a onclick="b_dinamico(2);"><i class="material-icons" >account_circle</i> Por Vendedor</a></li>
                                <li style="cursor: pointer;"><a  data-toggle="modal" data-target="#Reporte" ><i class="material-icons">assessment</i>Reporte</a></li>
                            <?php }  ?>
                                     
                                     
                                  </ul>-->
                
                <a  data-toggle="modal" data-target="#ReporteApp" style="float: right;" onclick="AbreReportes();" >
                   <img src="img/Captura.PNG" style="width: 35px;height: 35px; cursor: pointer;" >
                   
                </a>
                
              </div>

              
              
              
            </div>
          </div>
        </div>

        <div class="row sideBar" id="aqui"> <!--row sideBar-->

          </div><!--row sideBar-->

<p style="visibility: hidden;"> </p>
      <div class="side-two">
        <div class="row newMessage-heading">
          <div class="row newMessage-main">
           
            <div class="col-sm-10 col-md-10 col-xs-10 ">
                <div class="newMessage-title">
                <div class= "newMessage-back" >
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            
              Nueva Ocurrencia <a href="" style="text-decoration: none; color: white"></a>
            
              </div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-2 col-md-2">
                 <i class="material-icons" style="float:right;cursor:pointer;" data-toggle="tooltip" data-placement="left" title="Nuevo socio" onclick="addNewPartner()">person_add</i>
            </div>
          </div>
        </div> 

        <div class="row composeBox">
          <div class="col-sm-12 composeBox-inner">
            <div class="form-group has-feedback">
              <input id="filtrar2" type="text" class="form-control1" name="searchText" placeholder="Buscar Empresa"  onkeyup="buscar_ajax(this.value);">
          
            </div>
          </div>

        </div>


        <div class="row compose-sideBar" id="aqui2" >

       </div>


      </div>
    </div>
    
    
    <div class="modal " id="modal-versiones">
    <div class="modal-dialog modal-lg" role="document" style="width: 90%;" >
    <div class="modal-content" style="height:auto;overflow-y: auto">
            <div class="modal-header modal-cabecera">
            </div>
        <div class="modal-body">
    <div id="listFlotante"></div>
    </div>
    </div>
    </div>
</div>

<socio-negocio></socio-negocio>









 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





<script type = "text/javascript">




<?php 
if($_GET['activafiltros']=='activa_filtros')
{
    ?>
    
 function FiltrosOcurrencias2()
    {
        
            $.ajax({
            url:'php/FiltroSqlNew.php',
            type:'GET',
            data: '<?php echo $_SESSION['filtros'] ?>',
            success: function(data)
            {
                
                if($("#NuevoId").val()=='')
                {
                    console.log("cambiando el id nuevo -> aqui")
                    document.getElementById('NuevoId').id='aqui';    
                }
                //console.log(data);
                scope=1;
                $('#aqui').html('');
                $('#aqui').html(data);
                
                //luego cambiamos el div para que no moleste el scrol paginador Xd
                console.log('cambiamos id a aqui -> nuevo Id');
                document.getElementById('aqui').id='NuevoId';
            }
        });

    }
    FiltrosOcurrencias2();
    
    <?php
}

?>



  $(document).ready(function(){
    showUser();
    



//update estado
    $(document).on('click', '.updatestatus', function(){
        console.log('actualiza estado');
      $uid=$(this).val();
     
      //$('#edits'+$uid).modal('hide');
      
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
      $ufirstname=$('#ufirstname'+$uid).val();//estado
      console.log($ufirstname);
      $ulastname=$('#ulastname'+$uid).val(); //cliente
        $.ajax({
          type: "POST",
          url: "php/updateEstado2.php",
          data: {
            id: $uid,
            firstname: $ufirstname,
            lastname: $ulastname,
            edit: 1,
          },
            success: function(){
                console.log('Actualiza Estado');
                
                $("#EstadoMostrado"+$uid).html($('select[id="ufirstname'+$uid+'"] option:selected').attr('data_auxiliar'))
                //$('select[id="ufirstname42674"] option:selected').attr('data_auxiliar');
                
             $('.close_modal').click();
          }
      
        });
    });
  

   $(document).on('click', '.Reporte', function(){
      $uid=$(this).val();
      $('#edits'+$uid).modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
      $ufirstname=$('#ufirstname'+$uid).val();//estado
      $ulastname=$('#ulastname'+$uid).val(); //cliente
        $.ajax({
          type: "POST",
          url: "php/updateEstado2.php",
          data: {
            id: $uid,
            firstname: $ufirstname,
            lastname: $ulastname,
            edit: 1,
          },
            success: function(){
             $('.close_modal').click();
          }
      
        });
    });
  });
  
  
  function ed()
  {
     window.location.replace("www.google.com");
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
        $('#e').html(response);
      }
    });
  }
  

  function b_dinamico($n)
  {
     var texto;
    if ($n==1) 
    {
        texto='<div class="col-sm-1 col-xs-2"><i class="fa fa-twitch fa-2x" style="float: left;"></i></div><div class="col-sm-9 col-xs-8"><input id="filtrar" type="text" class="form-control1" name="searchText" id="bus"  placeholder="Buscar Ocurrencia" onkeyup="buscar_ajax2(this.value); " autofocus ></div>';
          $("#aqui").text("");
          document.getElementById('aqui').innerHTML = "<center>Escriba para Buscar por Ocurrencia</center>";
          
    }
    if ($n==2) 
    {

      texto='<div class="col-sm-1 col-xs-2"><i class="material-icons"  style="font-size:36px;float:left;">account_circle</i></div><div class="col-sm-9 col-xs-8"><input id="filtrar" type="text" class="form-control1" name="searchText" id="bus" placeholder="Buscar por Vendedor"  onkeyup="buscar_v(this.value);"  style="background-color: #A9D0F5; border: 2px solid #5DA1F3;" autofocus ></div>';
        $("#aqui").text("");

        document.getElementById('aqui').innerHTML = "<center>Escriba para Buscar por Vendedor</center>";

      
      
    }
      
     
      document.getElementById('buscar_dinamico').innerHTML = texto;

      $('[autofocus]').focus();
   
  }
    var xhr="";
  function buscar_ajax2(cadena){
    if (xhr!="") {
      xhr.abort();
    }
    xhr = $.ajax({
    type: 'POST',
    url: 'php/BuscarOcurrencia.php',
    data: 'cadena=' + cadena,
    success: function(respuesta) {
        console.log('BuscarProOcurrencias');
      //Copiamos el resultado en #mostrar
      $('#aqui').html(respuesta);
     }
  });
  }

  function buscar_ajax(cadena){
    if (xhr!="") {
      xhr.abort();
    }
    xhr = $.ajax({
    type: 'POST',
    url: 'php/BuscarContactos.php',
    data: 'cadena=' + cadena,
    success: function(respuesta) {
      //Copiamos el resultado en #mostrar
      $('#aqui2').html(respuesta);
     }
  });
  }
   function buscar_v(cadena){
    if (xhr!="") {
      xhr.abort();
    }
    xhr = $.ajax({
    type: 'POST',
    url: 'php/Buscar_por_vendedor.php',
    data: 'cadena=' + cadena,
    success: function(respuesta) {
      //Copiamos el resultado en #mostrar
      $('#aqui').html(respuesta);
     }
  });
  }
  function addNewPartner(){
      let head=$("head");
      head.append("<link  rel='stylesheet' href='../socio-fast/custom-styles.css'>");

    riot.compile('../socio-fast/socio-negocio-fast.php?index', function() {
    riot.mount("socio-negocio",{
      service:'../socio-fast/socio-negocio-fast.php',
        onCreate:function(new_partner){
            console.log(new_partner);
            if(new_partner.state){
                window.open("ocurrencias.php?IdC="+new_partner.id_persona,'_blank');
            }
        }
    }); 
});
  }


//modal cambiar estado 
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

function AbreReportes()
{
    
    if($('#ContenidoReporte').html()!="")
    {
        
    }else{
        $.ajax({
    type: 'POST',
    url: '../../Reportes/OcurrenciasF2.php',
    data: '',
    success: function(respuesta) {
      //Copiamos el resultado en #mostrar
      //$('#Reporte').modal('show');
      $('#ContenidoReporte').empty();
      $('#ContenidoReporte').html(respuesta);
      
      
     }
  });
    }
    
    
}
/*var FiltroEstado=filtroPorEstado('');
function filtroPorEstado(Id){
    console.log(Id)
    FiltroEstado=Id;
    
    $.ajax({
    type: 'POST',
    url: 'php/FiltrarEstado.php',
    data: 'EstadoFiltro=' + Id,
    success: function(respuesta) {
      //Copiamos el resultado en #mostrar
      $('#aqui').html(respuesta);
     }
  });
    
    
};*/
      



    let start_page = 0;
    //let scrol2=$('.sideBar::-webkit-scrollbar-track');

    var scope = $("#aqui");
    this.load = function(start) {
        $.get("api/?get", { start: start  }, function(response) {
            scope.append(response);
            start_page += 15;
        });
    };
    const win = $('#aqui');
    win.scroll(() => {
      console.log({scrollHeight:win.prop("scrollHeight"),scrollTop:win.prop("scrollTop"),winheight:win.height()})

        if (win.prop("scrollHeight")-win.prop("scrollTop") == win.height()) {
           this.load(start_page);
        }
      
         
    });
    this.load();


    let start_page_1 = 0;
    //let scrol2=$('.compose-sideBar::-webkit-scrollbar-track');

    const scope_1 = $("#aqui2");
   var _load = function (start) {
        $.get("api/contactos.php?get", { start: start }, function(response) {
            scope_1.append(response);
            start_page_1 += 15;
        });
    };
    const win1 = $('.compose-sideBar');
    win1.scroll(() => {
      console.log({scrollHeight:win1.prop("scrollHeight"),scrollTop:win1.prop("scrollTop"),winheight:win1.height()})

        if (win1.prop("scrollHeight")-win1.prop("scrollTop") == win1.height()) {
          _load(start_page_1);
        }
      
         
    });
    _load();


  $(function(){
    $(".heading-compose").click(function() {
      $(".side-two").css({
        "left": "0"
      });
    });

    $(".newMessage-back").click(function() {
      $(".side-two").css({
        "left": "-100%"
      });
    });

})



    Encuestar=function(IdPersona, NombreSocio)
		{
		    
		    
			 var param = "IdPersona="+IdPersona;
			 jQuery('#listFlotante').load("../Encuestas/FormEncuesta.php",param,function(){
				 /*jQuery('#listFlotante').dialog({ width:500,height:508});
				 jQuery('#listFlotante').dialog({'title':'Encuestando a '+NombreSocio});
				 jQuery('#listFlotante').dialog('open');	*/		  
			 });
			 
			 $('#modal-versiones').css({display:'block'});

		}
</script>
 
</body>
<script src="../../Scripts/md/riot.min.js"></script>
<script>
        riot.mixin({
            http:function(uri, data, type = "POST") {
                console.log(uri);
                return new Promise((resolve, reject) => {
                    var xhr = new XMLHttpRequest();
                 
                  
                    xhr.open(type, uri);
                    xhr.onload = () => {
                        if (xhr.status === 200) {
                            try{
                                resolve(JSON.parse(xhr.responseText));
                            }catch(err){
                                console.log("JSON format error!",err);
                            }
                        } else {
                            reject(xhr);
                            console.log(xhr);
                        }
                    };
                    xhr.send(data);
                });
            }
    }); 
    riot.tag2('modal-dialog','<div ref="dialog" class="md-modal"> <div class="md-modal-content"> <yield></yield> </div> </div> <div class="md-modal-overlay" ref="modal-overlay"></div>','[data-is=modal-dialog],modal-dialog{display:block}modal-dialog .md-modal{display:none;position:fixed;left:0;top:var(--margin-top,10%);right:0;background-color:var(--background,#fafafa);padding:24px;width:var(--width,55%);margin:auto;will-change:top,opacity;-webkit-box-shadow:0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12),0 5px 5px -3px rgba(0,0,0,.3);box-shadow:0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12),0 5px 5px -3px rgba(0,0,0,.3);opacity:1;transform:scaleX(1)}modal-dialog:not([custom-dialog]) .md-modal{max-height:var(--max-height,70%);overflow-y:var(--overflow-y,auto)}@media only screen and (max-width:992px){modal-dialog .md-modal{width:100%;top:0}modal-dialog[full-screen-on-small] .md-modal{max-height:100%;height:100%}}modal-dialog .md-modal .md-modal-content{padding:var(--content-padding,24px)}modal-dialog .md-modal-overlay{position:fixed;z-index:999;top:-25%;left:0;bottom:0;right:0;height:125%;width:100%;background:#000;display:none;will-change:opacity;opacity:.5}modal-dialog[bottom-sheet] .md-modal{top:auto;bottom:0;margin:0;width:100%;max-height:45%;border-radius:0;will-change:bottom,opacity}modal-dialog .animate-zoom{animation:animatezoom .6s}@keyframes animatezoom{from{transform:scale(0)}to{transform:scale(1)}}modal-dialog .animate-fading{animation:fading .6s}@keyframes fading{0%{opacity:.8}50%{opacity:.5}100%{opacity:0}}modal-dialog .md-modal-content [fixed-bottom],modal-dialog .md-modal-content [fixed-top]{position:absolute;right:0;left:0;--overflow-y:hidden;--max-height:auto}modal-dialog .md-modal-content [fixed-top]{top:0}modal-dialog .md-modal-content [fixed-bottom]{bottom:0}modal-dialog .md-modal-content [fixed-main]{margin-top:var(--fixed-main-top,48px);margin-bottom:var(--fixed-main-bottom,64px);height:var(--fixed-dialog-height,400px);overflow-y:auto}','',function(a){this.multiDialog=a.multiDialog||!1,this.zIndex=a.zIndex||3e3,this.customDialog=a.customDialog||!1,this.on('mount',()=>{if(this.onResize=()=>{console.log('dialog event',window.innerWidth),996<window.innerWidth||(this.refs.dialog.children[0].style.height=window.innerHeight-96+'px')},this.customDialog){let b=996<window.innerWidth?window.innerHeight/2+20:window.innerHeight-96;this.refs.dialog.children[0].style.height=b+'px'}this.multiDialog&&this.refs.dialog.addEventListener('click',()=>{this.zIndex++,this.refs.dialog.style.zIndex=this.zIndex}),this.handleListener=()=>{this.close()},this.refs.dialog.style.zIndex=this.zIndex}),this.open=function(){this.root.style.display='block',this.refs.dialog.style.display='block',this.refs.dialog.classList.add('animate-zoom'),this.refs['modal-overlay'].style.display='block',setTimeout(()=>{this.refs.dialog.classList.remove('animate-zoom')},250),this.refs['modal-overlay'].addEventListener('click',this.handleListener),this.customDialog&&window.addEventListener('resize',this.onResize)}.bind(this),this.removeListeners=function(){this.refs['modal-overlay'].removeEventListener('click',this.handleListener),this.customDialog&&window.removeEventListener('resize',this.onResize)}.bind(this),this.destroy=function(){this.removeListeners(),this.root.remove()}.bind(this),this.close=function(){this.refs.dialog.classList.add('animate-fading'),setTimeout(()=>{this.refs.dialog.style.display='none',this.refs.dialog.classList.remove('animate-fading')},500),this.refs['modal-overlay'].style.display='none',this.removeListeners()}.bind(this)});
</script>
</html>

<!--<div class="modal fade" id="ReporteApp" role="dialog">
    
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
        </div>
    </div>
</div>-->
    
    <div class="modal fade" id="ReporteApp" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
        
          <div id="ContenidoReporte"></div>
    
        
        
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
  
  
  
    
    
    
    
    

    
    
    
    
      <?php //require('../../Reportes/OcurrenciasF2.php'); ?>
   
    
   
   
   