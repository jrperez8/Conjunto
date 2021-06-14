<?php

namespace App\Controllers;
use App\Models\HomeModel;

class PerfilController extends BaseController
{
	public function index()
	{
		return view('perfilAdminView.php');
	}
}