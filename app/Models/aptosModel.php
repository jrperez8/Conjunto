<?php

namespace App\Models;

use CodeIgniter\Model;
use mysqli;

class AptosModel extends Model
{
    public function readAptos($conjunto){
      $sql = "SELECT * FROM apartamentos WHERE nombre_conjunto={$conjunto}";
      $apto = $this->db->query($sql);
      return $apto->getResult();
      }
}