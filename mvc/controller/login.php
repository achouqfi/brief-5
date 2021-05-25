<?php

require_once "./model/LoginModel.php";

//login & signin classe
class Login{

	//insex login
	function index()
	{
		session_start();
		if(!empty($_SESSION['email'])){
			header("location:http://localhost/mvc/salle/");
		}else{
			require __DIR__."/../view/home.php";
		}
	}

	//index register
	function indexRegister()
	{
		$sign=new LoginModel();
        $matieres=$sign->selectMatiere();
        require_once __DIR__."/../view/regester.php";

	}

	//creation d'un compte
	function create(){
		
		if(isset($_POST['ajouter'])){

			$sign=new LoginModel();
			$sign->insert($_POST['name'],$_POST['email'],$_POST['password'],$_POST['id_matiere']);
			// die(print_r($sign));
			header("location: http://localhost/mvc/login");
		}
	}


	// authentification
	function authentification(){
		if(isset($_POST['login'])){

			$sign=new LoginModel();
			$log=$sign->auth($_POST['email'],$_POST['password']);

			if(empty($log)){

				header("location: http://localhost/mvc/");
			}
			else{

				session_start();
				$id = $_SESSION['email']=$log[0]['id'];
				$role = $_SESSION['role']=$log[0]['role'];

				if ($role != "admin") {
					header("location: http://localhost/mvc/reservation");
				} else {
					header("location: http://localhost/mvc/salle/");
				}
			}	
		}
	}


	//deconnexion
	function Logout()
	{
		if(isset($_POST['logout'])){

			$sign=new LoginModel();
			$sign->logout();
			header("location: http://localhost/mvc/");
		}
	}
}

