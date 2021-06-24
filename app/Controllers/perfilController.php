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
	public function addApto(){
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$addModel = new PerfilModel();
		$conjunto = $request->getPost ('conjunto');
		$country = $request->getPost ('country');
		$state = $request->getPost ('state');
		$city = $request->getPost ('city');
		$address = $request->getPost ('address');
		$apto = $request->getPost ('apto');
		$owner = $request->getPost ('owner');
		$email = $request->getPost('email');
		$phone = $request->getPost('phone');
		$hab = $request->getPost('hab');
		$cuota = $request->getPost('cuota');
		$estado = $request->getPost('estado');
		$ocupante = $request->getPost('ocupante');
		$habitantes = $request->getPost('habitantes');		
		
		
		$newuser = $addModel->addAptos($conjunto,$country,$state,$city,$address,$apto,$owner,$email,$phone,$hab,$cuota,$estado,$ocupante,$habitantes);
		$getuser = $addModel->getApto($conjunto);

		foreach ($getuser as $datouser) 
			if(count($getuser)>0){
				$newdata = [	
					'conjunto' => $datouser-> nombre_conjunto,
					'apto' => $datouser->num_apto,							
					'email' => $email,
					'estado'=> $datouser->estado,						
				];
				$session->set($newdata);
				return redirect()->to('/aptos');
			}
			else {
				echo "El Correo Electrónico ya se Encuentra Registrado Controller";			
			}
		
		}	

}