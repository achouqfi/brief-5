<?php

require_once "./model/GroupeModel.php";
class Groupe
{
	
	function index()
	{
		session_start();
        if(!empty($_SESSION['email']) && ($_SESSION['role']=="admin")){
			$objet= new GroupeModel();
			$result=$objet-> getAll();
			require_once __DIR__.'/../view/groupe/index.php';
        }else{
            header("location: http://localhost/mvc");
        }
	}

	function create()
	{
		$salle= new GroupeModel();
		if(isset($_POST['ajouter'])){

			$count= count($_POST['GroupeLibelle']);
			for ($a = 0; $a <$count; $a++)
			{
				$salle->insert($_POST['GroupeLibelle'][$a],$_POST['GroupeEffectif'][$a]);
				header("location:http://localhost/mvc/groupe/");
			}
		}
	}


	function update()
	{
		
		if(isset($_POST['submit'])){

			$salle=new GroupeModel();
			$sl=$salle->update($_POST['id'] ,$_POST['GroupeLibelle'],$_POST['GroupeEffectif']);
			header("location:http://localhost/mvc/groupe/");

		}
	}

	function delete()
	{
		if(isset($_POST['supprimer'])){

			$salle=new GroupeModel();
			$salle->Delete($_POST['id']);
			header("location:http://localhost/mvc/groupe/");


		}
	}
}
