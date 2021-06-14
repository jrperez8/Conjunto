<?php

namespace App\Controllers;
use App\Models\HomeModel;

class HomeController extends BaseController
{
	public function index()
	{
		return view('homeView.php');
	}

	public function addUser(){
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$addAdmin = new homeModel();
		$name = $request->getPost ('name');
		$username = $request->getPost('username');
		$email = $request->getPost ('email');
		$password = $request->getPost ('password');		
		$city = $request->getPost ('city');
		$addAdmin->addPerfil($name,$username,$email,$password,$city);
		$getuser = $addAdmin->getUser($email);
	
		foreach ($getuser as $datouser) 
			if(count($getuser)>0){
				$newdata = [	
					'id_admin' => $datouser->id_admin,							
					'email' => $email,											
				];
				$session->set($newdata);
				return redirect()->to('/perfil');
			}
			else {
				echo "El Correo Electrónico ya se Encuentra Registrado Controller";			
			}	
		}
}
