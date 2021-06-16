<?php

namespace App\Controllers;
use App\Models\PerfilModel;

class PerfilController extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();		
		$perfil = new PerfilModel();		
		$username = $session->get('username');
		
		$datosPerfil = $perfil->readPerfil($username);			
		
		$datos = array(
			"datousuarios" => $datosPerfil,
			
		);		
		echo view('perfilAdminView.php',$datos);
	}

	public function logOut(){
		$session = \Config\Services::session();	
		$session->destroy();
		return redirect()->to('/');
		
}
}