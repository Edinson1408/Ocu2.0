<?php 
session_start();
include('../api/general.php');
	$Obj_Ge=new Datos;
$base=$_SESSION['bd'];
$IdPersona=$_POST['IdPersona'];

$Consulta=$Obj_Ge->AccionesOcurrenciasLista($IdPersona,$base);

?>
<div class="modal-content">
    <div class = "modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <center><h3 class = ""> <i class = "glyphicon glyphicon-pencil"> </i>  Acciones Ocurrencias </h3></center>
    </div>
    <form class="form-inline" name="FormularioAcciones" id="FormularioAcciones" method="post">
        <div class="modal-body">
            <input type="hidden" name='IdPersonaAccion' value="<?php echo $IdPersona; ?>">
            <ul>
                
                <?php
                
                foreach($Consulta as $vendedores) {
                    echo "<input type='radio' name='IdAccion'  id='IdAccion' value='".$vendedores['IdMaestro']."' > ".utf8_encode($vendedores['DescripCorta'])." 
                    <i class='material-icons'>".$vendedores['AuxDet1']."</i>
                    <br>";
                  
                    } ?>
            </ul>
            <!--<select id="IdAccion" class="form-control" name="IdAccion">-->
              
            <!--</select>-->
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" ><span class = "glyphicon glyphicon-remove"></span> </button> | <button type="button" class=" btn btn-success" data-dismiss="modal"  value="<?php ///echo $Id_cliente;?>"  onclick="GuardarAccion();"><span class = "glyphicon glyphicon-floppy-disk"></span> </button>
        </div>
    </form>
</div>


