<?php

namespace App\Controllers;
use App\Models\PerfilModel;
use App\Models\AptosModel;

class AptosController extends BaseController
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
		
		$aptos = new PerfilModel();		
		$apto = $session->get('conjunto');
		$datosApto = $aptos->getApto($apto);
		$images = array(
			"datosaptos" => $datosApto,
		);
	
		echo view ('layouts/header',$datos);
		echo view('aptosView.php',$images);
	}

    public function logOut(){
		$session = \Config\Services::session();	
		$session->destroy();
		return redirect()->to('/');
		
}
}