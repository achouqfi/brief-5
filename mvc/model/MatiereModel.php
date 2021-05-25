<?php

    require_once "db/connect.php";

    
    class MatiereModel{

        //select
        function select(){
            
            $query ="SELECT * FROM `matiere` ORDER BY id DESC";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        //delete row
        function Delete($id){

            $query= "DELETE FROM `matiere` WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $con->query($query);
   
        }

        //update
        function update($id ,$mLibelle){

            $query = "UPDATE `matiere` SET `libelle_M`='$mLibelle'  WHERE id=$id";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetch(PDO::FETCH_ASSOC);
            
        }

        //insert
        function insert($mLibelle){

            $query= "INSERT INTO `matiere`(`libelle_M`) VALUES ('$mLibelle')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
        }

    }
