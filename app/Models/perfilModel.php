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
    

}