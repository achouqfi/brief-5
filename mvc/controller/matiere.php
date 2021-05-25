<?php

require_once "./model/MatiereModel.php";

// matiere classe 
class Matiere
{
	//index de la page matire 
	function index()
	{
		session_start();
        if(!empty($_SESSION['email']) && ($_SESSION['role']=="admin")){
			$objet= new MatiereModel();
			$result=$objet-> select();
			require_once __DIR__.'/../view/matiere/index.php';
        }else{
            header("location: http://localhost/mvc");
        }
	}

	// creation ,
	function create()
	{
		$matiere= new MatiereModel();
		if(isset($_POST['ajouter'])){

			$count= count($_POST['MatiereLibelle']);
			for ($a = 0; $a <$count; $a++)
			{
				$matiere=new MatiereModel();
				$matiere->insert($_POST['MatiereLibelle'][$a]);
				header("location:http://localhost/mvc/matiere/");
			}
		}
	}

	// update
	function update()
	{
		
		if(isset($_POST['submit'])){

			$matiere=new MatiereModel();
			$sl=$matiere->update($_POST['id'] ,$_POST['MatiereLibelle']);
			header("location:http://localhost/mvc/matiere/");
			
		}
	}

	//delete
	function delete()
	{
		if(isset($_POST['supprimer'])){

			$matiere=new MatiereModel();
			$matiere->Delete($_POST['id']);
			header("location:http://localhost/mvc/matiere/");

		}
	}
}