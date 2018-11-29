<?php 
session_start();
include('../api/general.php');
	$Obj_Ge=new Datos;
$base=$_SESSION['bd'];
$IdPersona=$_POST['IdPersona'];

$Consulta=$Obj_Ge->ListaVendedores($IdPersona,$base);

?>


         

      
    <div class="modal-content">
    <div class = "modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <center><h3 class = ""> <i class = "glyphicon glyphicon-pencil"> </i>  Cambiar Vendedor </h3></center>
    </div>
    <form class="form-inline" name="FormularioVendedor" id="FormularioVendedor" method="post">
    <div class="modal-body">
            <input type="hidden" name='IdPersonaCV' value="<?php echo $IdPersona; ?>">
      
        <select id="IdVendedlor" class="form-control" name="IdVendedlor">
          <?php
         $vendedoras=  $Obj_Ge->ObtVendedorAsig($IdPersona,$base);
         
          echo "<option value='NA'>".utf8_encode($vendedoras)."</option>";
          foreach($Consulta as $vendedores) {
                    echo "<option value='".$vendedores['IdPersona']."'>".utf8_encode($vendedores['Nombre'])."</option>";
              
          }
          /*consulta sql SELECT A.* FROM ".$base.".persona  A LEFT JOIN vendedores B ON A.IDPERSONA=B.IDPERSONA
      where A.TIPOVENDEDOR=1 and  A.Nombre like '%".$buscar_n."%' limit 6*/
     // $Obj_Ocu->estado($Id_cliente,$_SESSION['bd']);

      ?>
          
        </select>


     <!--<input type="text" value="<?php //echo $res['1']; ?>" id="ufirstname<?php //echo $res['0']; ?>" class="form-control">-->
  
     <input type="text" value="<?php  echo $Id_cliente; ?>" id="ulastname<?php  //echo $Id_cliente; ?>" class="form-control" style="visibility: hidden;">
  
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" ><span class = "glyphicon glyphicon-remove"></span> </button> | <button type="button" class=" btn btn-success" data-dismiss="modal"  value="<?php ///echo $Id_cliente;?>"  onclick="GuardarVendedor();"><span class = "glyphicon glyphicon-floppy-disk"></span> </button>
    </div>
    </form>
    </div>


