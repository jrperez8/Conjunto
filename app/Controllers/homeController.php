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
		$addAdmin = new HomeModel();
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
					'username' => $datouser->username,							
					'email' => $email										
				];
				$session->set($newdata);
				return redirect()->to('/perfil');
			}
			else {
				echo "El Correo Electrónico ya se Encuentra Registrado Controller";			
			}	
		}

		public function signIn(){
			$request = \Config\Services::request();		
			$loginModel = new HomeModel();
			$session = \Config\Services::session();
			$username = $request->getPost ('username');
			$password = $request->getPost ('password');		
			$user = $loginModel->loginUser($username,$password);	
			
			foreach($user as $datauser){
				if(count($user)>0){
					$newdata = [																			
						'username' => $username											
					];
					$session->set($newdata);
					return redirect()->to('/perfil');
					
			} else {
				echo ("Datos Incorrectos");
			}
		}
	}
}
