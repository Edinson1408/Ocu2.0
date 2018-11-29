<div class="modal fade" id="correo<?php echo $res['0'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class = "modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <center><h3 class = ""> <i class = "glyphicon glyphicon-envelope"> </i> Enviar Correo</h3></center>
    </div>
    <form class="form-inline">
      <?php
$ed=$this->Mensaje_a_enviar($based,$res['0']);



$IdDocx = $this->encryptx($Id, 'Greed');
$Tipodoc = $this->encryptx($TipoDocu, 'Greed');
$org= $_SESSION['CodigoOrganizacion']; 
$orgx=$this->encryptx($org, 'Greed');


//verificamos que sea un documento 
if ($res['7']=='' || $res['7']==null) 
{ 
    $concatenar_mensaje='';

}else
{
  if ($TipoDocu==1 or $TipoDocu==3) {
        $concatenar_mensaje='<br>Url Documeto '.$this->docuemto_electronico($TipoDocu,$Id);
  }else {
      $concatenar_mensaje='<br>Url Documeto '."http://".$_SERVER['HTTP_HOST']."/erpx/p/"."?d=".$Tipodoc."and".urlencode($IdDocx)."andsky".$orgx;    
  }
  
}

$ocurrencia=utf8_encode($res['1']);
$pa_asunto=$ed[1].':'.substr($ocurrencia,0,20);

if ($ed[3]==$ed[2]) 
{
    $c1=$ed[3];
    $c2='';  
    $reo=$c1;
  
}
else
{
 $c1=$ed[3];
  $c2=$ed[2];  
  $reo=$c1.','.$c2;

  if ($ed[3]=='') {
    $reo=$ed[2];
  }
  if ($ed[2]=='') {
    $reo=$ed[3];
  }
}




 ?>
 

    <div class="modal-body">
      <!--$based-->
      <script type="text/javascript">
       //url_doc('<?php echo $TipoDocu ?>', '<?php echo $Id; ?>',<?php echo  $res['6'];?>,'<?php echo $ftip;?>');
       /*url_doc('<?php echo $TipoDocu ?>', '<?php echo $Id; ?>',<?php echo  $res['6'];?>,'<?php echo $ftip;?>',function(a){
        var  a;
        
        //str = "Visit Microsoft!";
        var res = a.replace("../../", "http://gestionx.com/erpx/");

        var r= $('#cuerpocorreo<?php echo $res['0']; ?>').val();
        mensaje_=r+' '+res;
        $('#cuerpocorreo<?php echo $res['0']; ?>').val(mensaje_);
       });*/
      </script>

      Destinatario <input type="" name=""  class="form-control" id="correos<?php echo $res['0'];?>" value="<?php echo $reo; ?>"  ><br>
      Asunto <textarea class="form-control" id="asunto<?php echo $res['0']; ?>" ><?php echo $pa_asunto;?></textarea> <br>
      Mensaje
     <!--<input type="text" value="<?php //echo $res['1']; ?>" id="ufirstname<?php //echo $res['0']; ?>" class="form-control">-->
     <!--<textarea  id="cuerpocorreo<?php //echo $res['0']; ?>" class="form-control" style="height: 100px" >-->
<!--Estimada(o): <?php //echo $ed[0];?> .
Solicito mayor informacion sobre el cliente : <?php //echo $ed[1];?> .
Estare a la espera de tu respuesta
   </textarea>-->

<textarea name="content"  id="cuerpocorreo<?php echo $res['0']; ?>" class="form-control" style="height: 100px" >
    
  
---------------------------
<?php 
$datem= date_create($res['2']);
echo date_format($datem, 'd-m-y H:i')."\n";?>
<?php echo $ocurrencia.$concatenar_mensaje; ?>
</textarea>
   
     <input type="text" value="<?php echo $bd ?>" id="ulastname<?php echo $res['0'];?>" class="form-control" style="visibility: hidden; width: 0px;height: 0px;">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal"><span class = "close_modal glyphicon glyphicon-remove"></span> </button> | <button type="button" class="enviar btn btn-success" value="<?php echo $res['0']; ?>"><span class = "glyphicon glyphicon-envelope"></span> </button>
    </div>
    </form>
    </div>
  </div>
   <input type="" name="" id="correo1<?php echo $res['0']; ?>"  class="form-control" value="<?php echo $c1 ;?>" style='visibility: hidden; width: 0px;height: 0px;'>
 <input type="" name=""  id="correo2<?php echo $res['0']; ?>"  class="form-control" value="<?php echo $c2 ;?>" style='visibility: hidden; width: 0px;height: 0px;'>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#cuerpocorreo<?php echo $res['0']; ?>' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<?php 



//header("Access-Control-Allow-Origin: * ");


      


?>