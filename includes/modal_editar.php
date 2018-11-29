<div class="modal fade" id="edit<?php echo $res['0'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class = "modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <center><h3 class = ""> <i class = "glyphicon glyphicon-pencil"> </i>Editar Ocurrencia</h3></center>
    </div>
    <form class="form-inline">
    <div class="modal-body">
      Comentario: 
     <!--<input type="text" value="<?php //echo $res['1']; ?>" id="ufirstname<?php //echo $res['0']; ?>" class="form-control">-->
     <textarea  id="ufirstname<?php echo $res['0']; ?>" class="form-control"><?php echo utf8_encode($res['1']); /*session_start(); echo 'session='.$_SESSION["IdMiEmpresaPrincipal"];*/ ?></textarea>
     <input type="text" value="<?php echo $bd ?>" id="ulastname<?php echo $res['0'];?>" class="form-control" style="visibility: hidden;">
  
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove" ></span> </button> | <button type="button" class="updateuser btn btn-success" value="<?php echo $res['0']; ?>" onclick="actualizar<?php echo $res['0']; ?>(<?php echo $res['0']; ?>)"><span class = "glyphicon glyphicon-floppy-disk"></span> </button>
    </div>
    </form>
    </div>
  </div>
</div>

<script>

let editor<?php echo $res['0']; ?>;

ClassicEditor
    .create( document.querySelector( '#ufirstname<?php echo $res['0']; ?>' ) )
    .then( newEditor => {
        editor<?php echo $res['0']; ?> = newEditor;
    } )
    .catch( error => {
        console.error( error );
    } );

// Assuming there is a <button id="submit">Submit</button> in your application.

 

    // ...

    //Update
    function actualizar<?php echo $res['0']; ?>(a)
    {
      $uid=a;
      console.log(a);
      $('#edit'+$uid).modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
      $ufirstname=$('#ufirstname'+$uid).val();
      $ulastname=$('#ulastname'+$uid).val();
      
        $.ajax({
          type: "POST",
          url: "php/update.php",
          data: {
            id: $uid,
            firstname: editor<?php echo $res['0']; ?>.getData(),
            lastname: $ulastname,
            edit: 1,
          },

          success: function(data){
            $(".mensaje"+$uid).html(editor<?php echo $res['0']; ?>.getData());
//            ed($ulastname);
          },error: function(error){
            console.log(error);
//            ed($ulastname);
          }
        });
    
  }
      
        
        
</script>