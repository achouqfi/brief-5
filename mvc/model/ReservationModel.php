<?php

    require_once "db/connect.php";
    require_once "model/GroupeModel.php";

    
    class ReservationModel{

        // select from table groupe
        function selectgroupe(){

            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $query ="SELECT * FROM `groupe`";
            $groupe= $con->query($query);
            return $groupe->fetchAll(PDO::FETCH_ASSOC);

        }

        //select  from table enseignant
        function selectenseignant(){

            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $query ="SELECT * FROM `enseignant`";
            $enseignant= $con->query($query);
            return $enseignant->fetchAll(PDO::FETCH_ASSOC);

        }

        //select from table salle
        function selectsalle(){

            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $query ="SELECT * FROM `salle`";
            $salle= $con->query($query);
            return $salle->fetchAll(PDO::FETCH_ASSOC);
            
        }

        //insert une nouvelle reservation
        function insert($date,$dure,$idE,$idG,$idS){

            $Nobjet = new connection();
            $conn=$Nobjet->connect();
            $qr="select * from reservation where date='$date' and duree ='$dure' and id_ensiegnant=$idE ";
            $result= $conn->query($qr)->fetchAll();
            if(!empty($result)){
                //ens non dispo
                  return -3;
            }
            else{
                $qr="select * from reservation where date='$date' and duree ='$dure' and id_groupe=$idG ";
                $result= $conn->query($qr)->fetchAll();
                if(!empty($result)){
                    //group non dispo
                      return -2;
                }
                else{
                    $qr="select * from reservation where date='$date' and duree ='$dure' and id_salle=$idS ";
                    $result= $conn->query($qr)->fetchAll();
                    if(!empty($result)){
                        // echo "hh";
                        //salle non dispo
                          return -1;
                    }
                    else{
                        $grp=new GroupeModel();
                        $group=$grp->getone($idG);
                        $qr2="select * from salle where id=$idS and  capacite >=".$group[0]['effectif'];
                        $res= $conn->query($qr2)->fetchAll();
                        if(empty($res)){
                            //la capacité est insuffisante
                            return 0;
                        }
                         else{
                            $query="INSERT INTO `reservation`(`date`, `duree`, `id_ensiegnant`, `id_groupe`, `id_salle`) VALUES ('$date','$dure',$idE,$idG,$idS)";
                            $result= $conn->query($query);
                            // die(print_r($result));
                            return 1;
                         }
            
                    }
                }
            }         
        }

        //select from table reservation
        function select(){

            $query ="SELECT salle.libelle,groupe.libelle_G,user.name,reservation.date,reservation.duree,reservation.id FROM `reservation`,groupe,salle,user WHERE reservation.id_salle=salle.id AND reservation.id_groupe=groupe.id AND reservation.id_ensiegnant=user.id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        }
        
        //delete row by id 
        function Delete($id){

            $query= "DELETE FROM `reservation` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
            
        }

    }
