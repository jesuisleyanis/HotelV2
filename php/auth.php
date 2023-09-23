<?php
class Auth {
    private $db = null;

    public function getConnection(){
        if($this->db === null){
            try{
                $this->db = new PDO('mysql:host=localhost;dbname=hotel','root','');
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                die("impossible de se connecter à la bdd");
            }
        }
        return $this->db;
    }

}

?>