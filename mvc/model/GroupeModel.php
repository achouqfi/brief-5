<?php

    require_once "db/connect.php";

    
    class GroupeModel{

        // select
        function getAll(){
            
            $query ="SELECT * FROM `groupe` ORDER BY id DESC";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
  
        function getone($id){

            $query ="SELECT * FROM `groupe` where id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        }


        //delete
        function Delete($id){

            $query= "DELETE FROM `groupe` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
   
        }

        //update
        function update($id ,$gLibelle,$effectif){

            $query = "UPDATE `groupe` SET `libelle_G`='$gLibelle', `effectif`='$effectif'  WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetch(PDO::FETCH_ASSOC);
            
        }

        //insert
        function insert($gLibelle,$effectif){

            $query= "INSERT INTO `groupe`( `libelle_G`, `effectif`) VALUES ('$gLibelle','$effectif')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
        }

    }
