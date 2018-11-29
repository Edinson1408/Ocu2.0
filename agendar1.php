
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="../../Scripts/ckeditor/ckeditor.js"></script>
</head>

<body>
<div class="container">
    
  <?php  
  //$date3 = new DateTime('12-Junio-2018');
//echo $date3->format('Y-m-d');
  
   $datetime=explode('/', $_GET['date']);
    //fecha 1 y hora 1
    $datetime1=explode('T', $datetime[0]);
    $date1 = new DateTime($datetime1[0]);
    $time1=new DateTime($datetime1[1]);
     $date1->format('Y-m-d');
     $time1->format('H:i:s');

     //fecha 2 y hora 2
    $datetime2=explode('T', $datetime[1]);
    $date2 = new DateTime($datetime2[0]);
    $time2=new DateTime($datetime2[1]);
     $date2->format('Y-m-d');
     $time2->format('H:i:s');
      
?>
    <br><br>
  <div class="row">
      <div class="col s12 m6">
          <div class="input-field col s12">
          <input  id="asunto" type="text" class="validate" value="<?php echo urldecode($_GET['titulo']);?>">
          <label for="asunto">Titulo</label>
        </div>
      </div>
      <div class="col s12 m6">
         <a class="waves-effect waves-light btn" onclick="agendar();">Guardar</a>
      </div>
  </div>
</div>

<div class="row">
  <div class="input-field col s3 m3">
    <input type="text" class="datepicker" value="<?php echo $date1->format('Y-m-d'); ?>" id='date1'>
  </div>
  <div class="input-field col s1 m3">
    <input type="text" class="timepicker" value="<?php echo $time1->format('H:i:s'); ?>" id='time1'>
  </div>
  
   <div class="input-field col s3 m3">
    <i class=" prefix">a</i>
    <input type="text" class="timepicker" value="<?php echo $time2->format('H:i:s'); ?>" id='time2'>
  </div>
  <div class="input-field col s4 m3">
    <input type="text" class="datepicker" value="<?php echo $date2->format('Y-m-d'); ?>" id='date2'>
  </div>
</div>

   
<div class="row">
  <div class="input-field col s6">
      <i class="material-icons prefix">location_on</i>
      <input id="dir" type="text" class="" placeholder="Direccion del Evento" value='Lima / Perú'>
  </div>
</div>

<div class="row">
  <div class="input-field col s4">
      <i class="material-icons prefix">notifications</i>
      <select>
        <option value="" disabled selected>Notificacion</option>
        <option value="1">Correo Electronico</option>
      </select>
      <label>Notificacion</label>
  </div>
  <div class="input-field col s1">
      <input type="number" name="" value="30" id='tiempo_noti'>
  </div>
  <div class="input-field col s2">
      <input type="text" name="" value="minutos" readonly>
  </div>

</div>

<div class="row">
  <div class="input-field col s10">
      <textarea id='descripcion'><?php echo urldecode($_GET['text']);?></textarea>
     <!-- <div  id="Info" >-->
        
      <!--</div>-->
  </div>
</div>
      

</body>
</html>
<script type="text/javascript" src="picker.js"></script>

<script type="text/javascript">
   $(document).ready(function() {
    $('select').material_select();
  });

   $('.datepicker').pickadate({
    selectMonths: false, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    labelMonthPrev: 'Mes anterior', 
    labelMonthSelect: 'Selecciona un mes', 
    labelYearSelect: 'Selecciona un año', 
    monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
    monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
    weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
    weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ], 
    today: 'Hoy',
    clear: 'Limpiar',
    format: 'yyyy-mm-d',
    close: 'Cerrar',
    closeOnSelect: false // Close upon selecting a date,
   
  });
  

    $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Limpiar', // text for clear-button
    canceltext: 'Cerrar', // Text for cancel-button,
    container: undefined, // ex. 'body' will append picker to body
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });

//chkeditor
/*
setTimeout(function(){
    CKEDITOR.replace("Info" ,{
        language: 'es',
        height:248,
        removeButtons:'Save,About,Flash',
        toolbarGroups:[
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'undo', groups: ['basicstyles','list','indent','blocks', 'align'] },
            '/',
    ]
    });

    }, 100);*/



</script>

<script type="text/javascript">
  //agrendar
  function agendar()
    {
    
    var asunto =$('#asunto').val();
    var dir =$('#dir').val();

    var date1 =$('#date1').val();
    var time1 =$('#time1').val();
    var date2 =$('#date2').val();
    var time2 =$('#time2').val();

    var datetime1=date1+'T'+time1;
    var datetime2=date2+'T'+time2;
    
    var html_info=$('#descripcion').val();
    var tiempo_noti=$('#tiempo_noti').val();
    var id_muro =<?php echo $_GET['id_muro']; ?>
    //var html_info=CKEDITOR.instances["Info"].getData();
    console.log(asunto);
    console.log(dir);
    console.log(html_info);
    console.log(date1);
    console.log(time1);
    console.log(date2);
    console.log(time2);
    console.log(datetime1);
    console.log(datetime2);
    console.log(id_muro);
    
        
/*$.ajax({
          type: "POST",
          url: "inserta_cal1.php",
          data: {asunto:asunto,dir:dir,html_info:html_info,datetime1:datetime1,datetime2:datetime2,tiempo_noti:tiempo_noti,id_muro:id_muro},
          success: function(data){
               $("#lblPlanta").html(data);
            //showUser();
            }
        });*/
    
    
    
    }

 
    </script>
    <div id="lblPlanta">
     
    </div>

