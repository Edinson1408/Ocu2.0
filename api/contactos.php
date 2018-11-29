<?php
/*Solo Mostraremos los contactos */


class LazyLoad {
  public $link;
  public function __construct(){

    $this->link=mysqli_connect("localhost","desarrollo","Ant1g70@z1","");
    call_user_func(array($this,array_keys($_REQUEST)[0]));  
    

  }


  public function get(){

    if(!isset($_REQUEST['start'])):
      $_REQUEST['start']=0;
    endif;


     session_start();
      $based=$_SESSION['bd'];

          /* $nivel_usurario=$_SESSION['JefeArea'];
          if ($nivel_usurario=='No' or $nivel_usurario=='Si' ) 
          {
              //$id_de_persona=$this->obtner_id_usuario_crea($_SESSION['LoginEmailValido'],$based); 
              $id_de_persona=$_SESSION['IdPersona'];
              
              $condicional_nivel=" WHERE a.IdPersona in (select d.IdPersona from $based.empre_cliente d where d.IdPersonaVend='$id_de_persona') ";
          }*/


    $sql="SELECT a.* FROM $based.persona a  order by a.Nombre limit {$_REQUEST['start']},15";

    $request=mysqli_query($this->link,$sql);
    while($row=mysqli_fetch_object($request)):
      $row->Nombre=utf8_encode($row->Nombre);
       $row->IdPersona=utf8_encode($row->IdPersona);
      /*$row->CodOrg=utf8_encode($row->CodOrg);*/
      /*$row->Direccion=utf8_encode($row->Direccion);*/
    ?>

  <div class="row sideBar-body buscar2">
            <div class="col-sm-3 col-xs-3 sideBar-avatar">
              <div class="avatar-icon">
                     <?php 
                              $imagenXd=$this->foto_logo($row->IdPersona,$based);
                             //foto s/n
                            $img="../../../Preferencias/$imagenXd/1/Imagenes/Logo.jpg";
                            if (file_exists($img)) { ?>
                             <?php echo  "<img src='../../Preferencias/$imagenXd/1/Imagenes/Logo.jpg'>"; ?>
                 <?php        }
                            else
                            { ?>

                           <?php  echo "<img src='img/sinlogo.jpg'>"; ?>

                             

                 <?php           }
                                  ?>
              </div>
            </div>

            <div class="col-sm-9 col-xs-9 sideBar-main">
          <a href="ocurrencias.php?IdC=<?=$row->IdPersona?>" style="text-decoration: none;"> 
              <div class="row">

                <div class="col-sm-8 col-xs-8 sideBar-name" style="overflow: hidden;">
                  <span class="name-meta"><?=utf8_encode($row->Nombre) ?></span>
                </div>

                <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                  <span class="time-meta pull-right">
                </span>
                </div>
              </div>
            </div>
          </div>
        </a>
       
    <?php
    endwhile;
  
  }



    public function foto_logo($id_persona,$base)
    {
      $mysql="SELECT a.Nombre,b.CodOrg from $base.persona a left join controlx.organizaciones b on a.numDoc=b.Ruc
                where a.IdPersona='$id_persona'";

      $request=mysqli_query($this->link,$mysql);
        while($res=mysqli_fetch_array($request))
        {
          $a=$res['1'];
        }
        return $a; 
    }

    
}
$boje=new LazyLoad();
//$boje-> get();


 ?>
