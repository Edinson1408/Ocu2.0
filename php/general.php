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


	public function add_ocurrencia($comentario,$base,$mi_empresa,$mi_id,$cliente)
	{

		$ocudescripcion=addslashes(utf8_decode($comentario));
				$ocudescripcion2 = str_replace(array("\r\n", "\r", "\n"), "<br />", $ocudescripcion);
				
		/*$this->comentario->query("INSERT INTO $base.muro (IdMiEmpresa,IdCliente,Padre,Comentario,Tipo,IdUserCrea,FCrea) 
									VALUES (".$mi_empresa.",0,0,'".$comentario."',1,".$mi_id.",sysdate());");*/
		$this->conexion->query("INSERT INTO $base.muro (IdMiEmpresa,IdCliente,Padre,Comentario,Tipo,IdUserCrea,FCrea) 
		VALUES ($mi_empresa,$cliente,0,'$ocudescripcion2',1,$mi_id,sysdate());");
	}

	public function delete_ocurrencia($base,$id)
	{
		$this->conexion->query("DELETE from $base.muro where IdMuro='$id';");
	}

	public function actualiza_estado($base,$id_persona,$n_status)
	{
		$this->conexion->query("UPDATE  $base.empre_cliente  set Estatus='$n_status'  where IdPersona='$id_persona';");
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
                              echo "<option value='".$res2['1']."'>".$res2['2']."</option>";
                          }
                }
                else
                {
                  
                  $sql3="SELECT IdGrupo, IdMaestro, DescripCorta FROM cxcitrix3.ma00 Where IdGrupo=55 
                          AND IdMiEmpresa='$MIEMPRESA' and IdMaestro='$EstadoActual'
                          UNION ALL 
                          SELECT '' IdGrupo ,'99' IdMaestro ,'SIN ESTATUS' 
                          UNION ALL
                          SELECT IdGrupo, IdMaestro, DescripCorta FROM cxcitrix3.ma00 Where IdGrupo=55 
                          AND IdMiEmpresa='$MIEMPRESA' and  not IdMaestro='$EstadoActual'";

                    $request3=mysqli_query($this->conexion,$sql3);

                        while ($res3=mysqli_fetch_array($request3)) 
                          {
                               echo "<option value='".$res3['1']."'>".$res3['2']."</option>";
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

    public function Buscar_Por_Vendedor($nombre_vendedor)
    {
        $sql_v="SELECT * FROM 
                (SELECT muro.IdUserCrea,IdMuro,muro.IdCliente as IdPersona,IF(CHARACTER_LENGTH(muro.Comentario) > 100,CONCAT(SUBSTRING(muro.Comentario,1, 100), ' ...', ''),muro.Comentario) 
                as Comentario, muro.Comentario as ComentarioCompleto, DocOrigen, Origen, muro.IdCliente,
                (SELECT Nombre FROM persona WHERE IdPersona=muro.IdCliente)as NombreSocio, (select Nombre from persona where IdPersona in 
                (select IdPersona from usuarios_skynet where IdUsuario=muro.IdUserCrea))as NomUserCrea, 
                (select IdPersona from usuarios_skynet where IdUsuario=muro.IdUserCrea) as IdCrea,
                (select IdPersona from usuarios_skynet where IdUsuario=muro.IdUserCrea)as IdPersonaCr, 
                (select Estatus from empre_cliente where IdPersona=muro.IdCliente group by Estatus)as Estatus_cli, DATE_FORMAT(muro.FCrea,'%d-%m-%Y %h:%i:%s') FCrea, 
                (SELECT Nombre FROM persona WHERE Nombre like '%".$nombre_vendedor."%'   and IdPersona in 
                (select IdPersonaVend from empre_cliente where IdPersona=muro.IdCliente ) limit 1) as NomVendedor, 
                (select IdPersonaVend from empre_cliente where IdPersona=muro.IdCliente group by IdPersona) as IdPersoVend, (SELECT IdVendedor FROM vendedores WHERE IdPersona in
                 (select IdPersonaVend from empre_cliente WHERE IdPersona=muro.IdCliente)) as IdVendedor, 
                 (select AuxDet1 from ma00 where IdMaestro = (select Estatus from empre_cliente where IdPersona = muro.IdCliente) and IdMiEmpresa = 1) as color, muro.IdMiEmpresa
                 FROM muro left join persona p on (muro.IdCliente = p.IdPersona) left join empre_cliente ecli on (p.IdPersona = ecli.Idpersona) 
                 left join persona ven on (ecli.IdPersonaVend = ven.IdPersona) WHERE muro.IdMiEmpresa in (1,2,3,4,5,6,7,8) 
                and  muro.FCrea = (Select max(Fcrea) 
                from muro where muro.IdCliente = p.IdPersona) ) p ORDER BY p.IdMuro and NomVendedor IS NOT NULL DESC LIMIT 0,20";


                return $this->sql($sql_v);



    }

}

?>