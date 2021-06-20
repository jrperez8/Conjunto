<?php

namespace App\Models;

use CodeIgniter\Model;
use mysqli;

class PerfilModel extends Model {

    function readPerfil($username) {
        $sql = "SELECT * FROM administrador WHERE username = '{$username}' ";
        $perfil = $this->db->query($sql);
        return $perfil->getResult();
        }

    function getApto($apto){
            $sql = "SELECT * FROM apartamentos WHERE num_apto={$apto}";
            $apto = $this->db->query($sql);
            return $apto->getResult();
        }

    function addAptos($conjunto,$country,$state,$city,$address,$apto,$owner,$email,$phone,$hab,$cuota,$estado,$ocupante,$habitantes){
        $conex = mysqli_connect("localhost","root","","conjunto") or die ("Error al Conectar la Base de Datos");
        /*$validate = mysqli_query($conex,"SELECT direccion FROM aptos WHERE id_usu = '{$idusuario}'");
        if(mysqli_num_rows($validate)==0)
        {*/
          $sql = "INSERT INTO apartamentos (nombre_conjunto,pais,departamento,ciudad,direccion,num_apto,propietario,email,telefono,ocupantes,valor_cuota,estado,nom_arrendatario,ocupantes_arrend) VALUES ('{$conjunto}','{$country}','{$state}','{$city}','{$address}','{$apto}','{$owner}','{$email}','{$phone}','{$hab}','{$cuota}','{$estado}','{$ocupante}','{$habitantes}')";

        $this->db->query($sql);
        /*}
        else{
          echo "El Inmueble ya se encuentra Registrado";
        }*/
    }
    

}