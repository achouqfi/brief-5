<?php
    

    class connection{

        private $servername="localhost";
        private $db="authentification_user";
        private $password="user";
        private $user="user";    
    
        public function connect(){
    
            try {
                
                $dsn=new PDO ("mysql:host=".$this->servername.";dbname=".$this->db, $this->user, $this->password);
    
            }catch (PDOExeption $e){
    
                echo "erreur".$e->getMessage();
            }
        }
    }

?>