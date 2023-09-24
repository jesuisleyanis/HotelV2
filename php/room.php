<?php 
include 'auth.php';
class room {
    private $auth;
    public function __construct(){
        $this->auth = new Auth();
    }

    public function roomDisplay(){
        $conn = $this->auth->getConnection();
        $sql = "SELECT * FROM `chambre` WHERE Statut = 'Libre';";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}