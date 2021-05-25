<?php

require_once "./model/SalleModel.php";

class Salle
{
	
	function index()
	{
		session_start();
        if(!empty($_SESSION['email']) && ($_SESSION['role']=="admin")){
			$objet= new SalleModel();
			$result=$objet-> getAll();
			require_once __DIR__.'/../view/salle/index.php';
        }else{
            header("location: http://localhost/mvc/re");
        }
	}

	function create()
	{
		$salle= new SalleModel();
		if(isset($_POST['ajouter'])){

			$count= count($_POST['SalleCapacite']);
			for ($a = 0; $a <$count; $a++)
			{
				$salle=new SalleModel();
				$salle->insert($_POST['SalleCapacite'][$a],$_POST['SalleLibelle'][$a]);
				header("location:http://localhost/mvc/salle/");
			}
		}
	}

	function update()
	{
		
		if(isset($_POST['submit'])){

			$salle=new SalleModel();
			$sl=$salle->update($_POST['id'] ,$_POST['SalleCapacite'],$_POST['SalleLibelle']);
			header("location:http://localhost/mvc/salle/");
			
		}
	}

	function delete()
	{
		if(isset($_POST['supprimer'])){

			$salle=new SalleModel();
			$salle->Delete($_POST['id']);
			header("location:http://localhost/mvc/salle/");

		}
	}
}
