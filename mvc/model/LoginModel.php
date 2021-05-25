<?php

    require_once "db/connect.php";

    
    class LoginModel{

        //insert
        function insert($Name,$Email,$Password,$Matiere){
            
            $query="INSERT INTO `user`(`name`, `email`, `password`, `role`) VALUES ('$Name','$Email','$Password','enseignant')";
            $query1="INSERT INTO enseignant(`name`, `email`, `password`, `id_M`) VALUES ('$Name','$Email','$Password',$Matiere)";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            $result1= $con->query($query1);
        }

        //authentification  
        function auth($Email,$Password){

            $query ="select * from user where email='$Email' and password='$Password'";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
           
           return $result->fetchAll(PDO::FETCH_ASSOC);
            
        }

        function logout(){
            session_start();
            session_destroy();

        }

        function selectMatiere(){
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $query ="SELECT * FROM `matiere`";
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

    }