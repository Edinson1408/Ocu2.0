<?php
 
/**
* Cosas comunes 
*/
class Datos  
{
	public $baseXD;
	private $conexion;
	function __construct()
	{
		$this->conexion=mysqli_connect('localhost','desarrollo','Ant1g70@z1',$_SESSION['bd']);
	}

	public function sql($sql)
			{
				while ($res=mysqli_fetch_array($sql))
					{$arr[]=$res;}
				return $arr;
			}


	public function dato_name($Id_cliente)
		{
			session_start();
			$bad=$_SESSION['bd'];
			
			//$sql=$this->conexion->query("SELECT a.comentario,a.FCrea from $base.muro a order by Fcrea ASC;");
			$sql=$this->conexion->query("SELECT * FROM $bad.persona where IdPersona='$Id_cliente'");
			return $this->sql($sql);
		}

	

	public function actualizar($id,$comentario,$base)
		{
				$ocudescripcion=addslashes(utf8_decode($comentario));
				$ocudescripcion2 = str_replace(array("\r\n", "\r", "\n"), "<br />", $ocudescripcion);
			$this->conexion->query("UPDATE $base.muro 
									set Comentario='$ocudescripcion2'
									where IdMuro='$id';");
		}


	public function add_ocurrencia($comentario,$base,$mi_empresa,$mi_id,$cliente,$IdAccion)
	{

		$ocudescripcion=addslashes(utf8_decode($comentario));
				$ocudescripcion2 = str_replace(array("\r\n", "\r", "\n"), "<br />", $ocudescripcion);
				
		/*$this->comentario->query("INSERT INTO $base.muro (IdMiEmpresa,IdCliente,Padre,Comentario,Tipo,IdUserCrea,FCrea) 
									VALUES (".$mi_empresa.",0,0,'".$comentario."',1,".$mi_id.",sysdate());");*/
		$this->conexion->query("INSERT INTO $base.muro (IdMiEmpresa,IdCliente,Padre,Comentario,Tipo,IdUserCrea,FCrea,IdAccionO) 
		VALUES ($mi_empresa,$cliente,0,'$ocudescripcion2',1,$mi_id,sysdate(),'$IdAccion');");
	}

	public function delete_ocurrencia($base,$id)
	{
		$this->conexion->query("DELETE from $base.muro where IdMuro='$id';");
	}

	public function actualiza_estado($base,$id_persona,$n_status)
	{
		$this->conexion->query("UPDATE  $base.empre_cliente  set Estatus='$n_status'  where IdPersona='$id_persona';");
	}

    public function actualiza_url_cal($base,$id_muro,$link,$id_usuario)
    {
        $link1=urlencode($link);
        /*$this->conexion->query("UPDATE  $base.muro  set url_cal='$link1'  where IdMuro='$id_muro';");
        echo "UPDATE  $base.muro  set url_cal='$link1'  where IdMuro='$id_muro';";*/
        
        $this->conexion->query("INSERT into  $base.historial_calendar values ('','$id_muro','$id_usuario','$link1','descripcion') ;");
    }

	public function foto_logo_o($id_persona,$base)
    {
      $mysql="SELECT a.Nombre,b.CodOrg from $base.persona a left join controlx.organizaciones b on a.numDoc=b.Ruc
                where a.IdPersona='$id_persona'";

      $request=mysqli_query($this->conexion,$mysql);
        while($res=mysqli_fetch_array($request))
        {
          $a=$res['1'];
        }
        return $a; 
    }

    public function Buscar_Contactos($busqueda,$base)
    {
    	if ($busqueda=="") {
    		$limite='limit 15';
    	}
  
    	$sql=$this->conexion->query("SELECT * FROM $base.persona where  nombre like '%".$busqueda."%'  ORDER BY nombre  $limite ");
		return $this->sql($sql);
    }


     public function estado($id_persona,$base)
    {
            $MIEMPRESA=$_SESSION["IdMiEmpresaPrincipal"];
            if (isset($id_persona)) //verifica si le eviar parametros XD
            {
                $sql1="SELECT ma.DescripCorta descripEstatus, ecli.Estatus IdEstatus from $base.empre_cliente ecli join $base.ma00 ma on (ma.IdMaestro = ecli.Estatus) WHERE IdPersona LIKE '$id_persona'"; 

                 $request1=mysqli_query($this->conexion,$sql1);


                while ($resul=mysqli_fetch_array($request1)) 
                {
                    $EstadoActual=$resul['1'];
                }

                if ($EstadoActual=='99')//significa que es estado no asignado 
                {       
                         //por el moento comentare esta session , cuando este en produccion descomentar $_SESSION["IdMiEmpresaPrincipal"];
                        $sql2="SELECT '' IdGrupo ,'99' IdMaestro ,'SIN ESTATUS' DescripCorta UNION ALL SELECT IdGrupo, IdMaestro, DescripCorta FROM $base.ma00 Where IdGrupo=55 AND IdMiEmpresa='".$_SESSION["IdMiEmpresaPrincipal"]."'";
                         $request2=mysqli_query($this->conexion,$sql2);

                          while ($res2=mysqli_fetch_array($request2)) 
                          {
                              echo "<option value='".$res2['1']."'>".utf8_encode($res2['2'])."</option>";
                          }
                }
                else
                {
                  
                  $sql3="SELECT IdGrupo, IdMaestro, DescripCorta,AuxDet2 FROM $base.ma00 Where IdGrupo=55 
                          AND IdMiEmpresa='$MIEMPRESA' and IdMaestro='$EstadoActual'
                          UNION ALL 
                          SELECT '' IdGrupo ,'99' IdMaestro ,'SIN ESTATUS' ,''
                          UNION ALL
                          SELECT IdGrupo, IdMaestro, DescripCorta,AuxDet2 FROM $base.ma00 Where IdGrupo=55 
                          AND IdMiEmpresa='$MIEMPRESA' and  not IdMaestro='$EstadoActual'";

                    $request3=mysqli_query($this->conexion,$sql3);

                        while ($res3=mysqli_fetch_array($request3)) 
                          {
                               echo "<option data_auxiliar='".$res3['3']."' value='".$res3['1']."'>".utf8_encode($res3['2'])."</option>";
                          }

                }

                   
            }
    }


    public function correos($id_cliente,$id_muro,$base)
    {
      $sql=$this->conexion->query("SELECT a.IdUserCrea , b.IdUsuario,b.IdPersona,c.IdPersona , b.EmailUsuario as email,c.Login,c.Nombre
            from $base.muro a, $base.usuarios_skynet b, $base.persona c
            where a.IdUserCrea=b.IdUsuario and b.IdPersona=c.IdPersona and
             a.IdCliente =  '$id_cliente'
            AND a.IdMuro =  '$id_muro';");

          return $this->sql($sql);
    }


       public function Buscar_Vendedor($buscar_n,$base)
    {
      $sql=$this->conexion->query("SELECT A.* FROM ".$base.".persona  A LEFT JOIN vendedores B ON A.IDPERSONA=B.IDPERSONA
      where A.TIPOVENDEDOR=1 and  A.Nombre like '%".$buscar_n."%' limit 6");
  
          return $this->sql($sql);
    }


    public function Buscar_Por_Vendedor($nombre_vendedor)
    {
      if ($nombre_vendedor=="") {
        $limite='limit 15';
      }
        $sql_v=$this->conexion->query("SELECT * FROM 
                (SELECT muro.IdUserCrea,IdMuro,muro.IdCliente as IdPersona,IF(CHARACTER_LENGTH(muro.Comentario) > 100,CONCAT(SUBSTRING(muro.Comentario,1, 100), ' ...', ''),muro.Comentario) 
                as Comentario, muro.Comentario as ComentarioCompleto, DocOrigen, Origen, muro.IdCliente,(SELECT Nombre FROM persona WHERE IdPersona=muro.IdCliente)as NombreSocio,
                (select IdPersona from usuarios_skynet where IdUsuario=muro.IdUserCrea) as IdCrea,
                (select IdPersona from usuarios_skynet where IdUsuario=muro.IdUserCrea)as IdPersonaCr, 
                (select Estatus from empre_cliente where IdPersona=muro.IdCliente group by Estatus)as Estatus_cli, muro.FCrea as FCrea, 
                (SELECT Nombre FROM persona WHERE  IdPersona in 
                (select IdPersonaVend from empre_cliente where IdPersona=muro.IdCliente ) limit 1) as NomVendedor, 
                (select IdPersonaVend from empre_cliente where IdPersona=muro.IdCliente group by IdPersona) as IdPersoVend, (SELECT IdVendedor FROM vendedores WHERE IdPersona in
                 (select IdPersonaVend from empre_cliente WHERE IdPersona=muro.IdCliente)) as IdVendedor, 
                 (select AuxDet1 from ma00 where IdMaestro = (select Estatus from empre_cliente where IdPersona = muro.IdCliente) and IdMiEmpresa = 1) as color, muro.IdMiEmpresa
                 FROM muro left join persona p on (muro.IdCliente = p.IdPersona) left join empre_cliente ecli on (p.IdPersona = ecli.Idpersona) 
                 left join persona ven on (ecli.IdPersonaVend = ven.IdPersona) WHERE muro.IdMiEmpresa in (1,2,3,4,5,6,7,8) 
                and  muro.FCrea = (Select max(Fcrea) from muro where muro.IdCliente = p.IdPersona) ) p 
                where NomVendedor  like '%".$nombre_vendedor."%'  ORDER BY  DATE_FORMAT(FCrea,'%Y-%m') desc $limite");


                return $this->sql($sql_v);



    }
    
    public function FiltroEstado()
    {
        
    }
    
    public function clinete_vendedor($base,$cliente,$vendedor)
    {
      //esta funcion buscara por linea si una consilta si el venddor esta relacionado voltara el valor 1 si no el 0 
        $sql_vendedor="SELECT * from $base.empre_cliente  where IdPersonaVend='$vendedor' and IdPersona='$cliente'";

        $request_vendedor=mysqli_query($this->conexion,$sql_vendedor);


        $n=mysqli_num_rows($request_vendedor);
        
        return $n;
    }
    
     public function ObtenerEstado($idPersona,$base)
    {
        $sql1="SELECT ma.DescripCorta descripEstatus, ecli.Estatus IdEstatus,ma.AuxDet1,ma.AuxDet2 
        from $base.empre_cliente ecli join $base.ma00 ma on (ma.IdMaestro = ecli.Estatus) WHERE IdPersona LIKE '$idPersona'"; 
        $res=mysqli_query($this->conexion,$sql1);
        $r=mysqli_fetch_object($res);
        
 
                 //return $r->descripEstatus;
                 $Array=array('Color'=>$r->AuxDet1,'Desc'=>$r->AuxDet2);
                 return $Array;
               
      
        
        
       
    }
    public function ObtVendedorAsig($idPersona,$base)
    {
        $sqlVA="SELECT a.Nombre FROM $base.persona a ,$base.empre_cliente b where a.IdPersona=b.IdPersonaVend
        and b.IdPersona='$idPersona' ";
        $res=mysqli_query($this->conexion,$sqlVA);
        $r=mysqli_fetch_object($res);
        return utf8_encode($r->Nombre);
        
    }
    public function ListaVendedores($IdPersona,$base)
    {
         $sql=$this->conexion->query("SELECT A.* FROM ".$base.".persona  A LEFT JOIN vendedores B ON A.IDPERSONA=B.IDPERSONA
            where A.TIPOVENDEDOR=1 ");
             return $this->sql($sql);
    }
    
    public function ActualizaVendedor($IdPersona,$IdVendedor,$base)
    {
        $sql="update $base.empre_cliente set  IdPersonaVend='$IdVendedor' where IdPersona='$IdPersona' ";
        mysqli_query($this->conexion,$sql);
        
    }
    
    public function AccionesOcurrenciasLista($IdPersona,$base)
    {
        // $SqlIdAccion="SELECT IdAccionesOcurrencias FROM ".$base.".empre_cliente  where IdPersona='$IdPersona' ";
        // $res=mysqli_query($this->conexion,$SqlIdAccion);
        // $r=mysqli_fetch_object($res);
        // $IdAccionOcurr=$r->IdAccionesOcurrencias;
        
        // if($IdAccionOcurr=='0' or $IdAccionOcurr=='')
        // {
         $sql=" SELECT IdMaestro,DescripCorta,AuxDet1 FROM ".$base.".ma00 where IdMiEmpresa='1' AND IdGrupo='1012' ORDER by IdMaestro";
            return mysqli_query($this->conexion,$sql);    
        //}
        // else 
        // {
        //     $sql="
        //             SELECT IdMaestro,DescripCorta FROM ".$base.".ma00 where IdMiEmpresa='1' AND IdGrupo='1012'
        //             And IdMaestro='".$IdAccionOcurr."'
        //             union all 
        //             SELECT IdMaestro,DescripCorta FROM ".$base.".ma00 where IdMiEmpresa='1' AND IdGrupo='1012'
        //             AND IdMaestro !='".$IdAccionOcurr."'
        //             ";
                    
        //             return mysqli_query($this->conexion,$sql);   
        // }
        
        
        
             
    }
    
     public function MostrarAccion($IdPersona,$base)
    {
        
        $Sql="SELECT DescripCorta FROM ".$base.".ma00 where IdMiEmpresa='1' AND IdGrupo='1012'
                    AND IdMaestro=(SELECT IdAccionesOcurrencias FROM ".$base.".empre_cliente  where IdPersona='$IdPersona' )";
        $res=mysqli_query($this->conexion,$Sql);
        $r=mysqli_fetch_object($res);
        return utf8_encode($r->DescripCorta);
        //return $this->sql($sql);
             
    }
    
    public function ActualizaAccion($IdPersona,$IdAccionesOcurrencias,$base)
    {
        $sql="update $base.empre_cliente set  IdAccionesOcurrencias='$IdAccionesOcurrencias' where IdPersona='$IdPersona' ";
        mysqli_query($this->conexion,$sql);
        $SqlIcon="SELECT AuxDet1  FROM ma00 WHERE IdMaestro =  '$IdAccionesOcurrencias'  ";
        $re=mysqli_query($this->conexion,$SqlIcon);
        $r=mysqli_fetch_object($re);
        echo $r->AuxDet1;
        
        
    }
    

}

?>