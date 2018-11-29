<div class="modal fade" id="edits" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class = "modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <center><h3 class = ""> <i class = "glyphicon glyphicon-pencil"> </i>   Cambiar estado</h3></center>
    </div>
    <form class="form-inline">
    <div class="modal-body">

      
        <select id="ufirstname<?php echo $Id_cliente;?>" class="form-control">
          <?php
      $Obj_Ocu->estado($Id_cliente,$_SESSION['bd']);

      ?>
          
        </select>


     <!--<input type="text" value="<?php //echo $res['1']; ?>" id="ufirstname<?php //echo $res['0']; ?>" class="form-control">-->
  
     <input type="text" value="<?php  echo $Id_cliente; ?>" id="ulastname<?php  echo $Id_cliente; ?>" class="form-control" style="visibility: hidden;">
  
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> </button> | <button type="button" class="updatestatus btn btn-success" value="<?php echo $Id_cliente;?>"><span class = "glyphicon glyphicon-floppy-disk"></span> </button>
    </div>
    </form>
    </div>
  </div>
</div>

