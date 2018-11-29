
<div class="modal fade" id="edits<?=$key14['IdPersona']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class = "modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <center><h3 class = ""> <i class = "glyphicon glyphicon-pencil"> </i>   Cambiar estado</h3></center>
    </div>
    <form class="form-inline">
    <div class="modal-body">

      
        <select id="ufirstname<?=$key14['IdPersona']?>" class="form-control">
          <?php
     $Obj_Ge->estado($key14['IdPersona'],$_SESSION['bd']);

      ?>
          
        </select>


     <!--<input type="text" value="<?php //echo $res['1']; ?>" id="ufirstname<?php //echo $res['0']; ?>" class="form-control">-->
  
     <input type="text" value="<?php  echo $key14['IdPersona']; ?>" id="ulastname<?=$key14['IdPersona']?>" class="form-control" style="visibility: hidden;">
  
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal"><span class = "close_modal glyphicon glyphicon-remove"></span> </button> | <button type="button" class="updatestatus btn btn-success" value="<?=$key14['IdPersona']?>"><span class = "glyphicon glyphicon-floppy-disk"></span> </button>
    </div>
    </form>
    </div>
  </div>
</div>

