<?php

class connection{
    
    public $servername='localhost';
    public $dbname='courssoutien';
    public $user='user';
    public $pass='user';

    public function connect(){

        try {
           $db = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->user, $this->pass);
           return $db;
           
        }catch (PDOException $e) {
            print "Erreur :" . $e->getMessage() . "<br>";
        }
    }
}
