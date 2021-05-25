<?php

require_once "./model/ReservationModel.php";

class Reservation
{
	
	function index()
	{
		// $Nobjet=new ReservationModel();
        // $groupes=$Nobjet->selectgroupe();
		// $salles=$Nobjet->selectsalle();
		// $reservation=$Nobjet->select();
        // require_once __DIR__."/../view/reservation/index.php";
		session_start();
        if(!empty($_SESSION['email']) && ($_SESSION['role'] !=="admin")){
			$Nobjet=new ReservationModel();
			$groupes=$Nobjet->selectgroupe();
			$salles=$Nobjet->selectsalle();
			$reservation=$Nobjet->select();
			require_once __DIR__."/../view/reservation/index.php";
        }else{
            header("location: http://localhost/mvc/salle");
        }
		
	}

	function create()
	{
		if(isset($_POST['reserver'])){

			session_start();
			$reservation=new ReservationModel();
			$rep=$reservation->insert($_POST['date'],$_POST['duree'], $_SESSION["email"],$_POST['Groupe'],$_POST['Salle']);
			
			if($rep==-1){

				echo( "<script> alert('deja réserver')</script>");
				$this->index();
				// require_once __DIR__."/../view/reservation/index.php";
			}

			if($rep==0){
				// session_start();
				echo( "<script> alert('il y a pas  de salle disponible dont la capacite est sufisante')</script>");
				$this->index();
				// require_once __DIR__."/../view/reservation/index.php";
			}

			if($rep==1){
				// session_start();
				echo( "<script> alert('la reservation est valide')</script>");
				$this->index();
				// header("location:http://localhost/mvc/reservation/");

			}
			// header("location:http://localhost/mvc/reservation/");
		}
	}


	function delete()
	{
		if(isset($_POST['supprimer'])){

			$salle=new ReservationModel();
			$salle->Delete($_POST['id']);
			header("location:http://localhost/mvc/reservation/");

		}
	}

}