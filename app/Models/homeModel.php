<?php

namespace App\Models;

use CodeIgniter\Model;
use mysqli;

class HomeModel extends Model {

  public function addPerfil($name,$username,$email,$password,$city){
    $conex = mysqli_connect("localhost","root","","conjunto") or die ("Error al Conectar la Base de Datos");
    $validate = mysqli_query($conex,"SELECT email FROM administrador WHERE email = '{$email}'");
    if(mysqli_num_rows($validate)==0)
    {
    $sql = "INSERT INTO administrador (name,username,email,password,city) VALUES ('{$name}','{$username}','{$email}','{$password}','{$city}')";
    $this->db->query($sql);
    }
    else{
      echo "El Correo Electrónico ya se encuentra Registrado Model";
    }
  }

  public function getUser($email){
    $sql = "SELECT * FROM administrador WHERE email = '{$email}'";
    $prueba = $this->db->query($sql)->getResult();
    return $prueba;
}

public function loginUser($username,$password){
          
  $cnx = mysqli_connect("localhost","root","","conjunto") or die ("Error al Conectar la Base de Datos");
  $validatelogin = mysqli_query($cnx, "SELECT username FROM administrador WHERE username = '{$username}'");
  if(mysqli_num_rows($validatelogin)>0){
    $sql = "SELECT * FROM administrador WHERE username = '{$username}' AND password = '{$password}'";
    $user = $this->db->query($sql)->getResult();
    return $user;
  }
  else {    
    echo "<h2>El Correo Electrónico no se encuentra Registrado Model</h2>";
  }
 
}
}