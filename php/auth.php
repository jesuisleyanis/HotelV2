<?php
class Auth {
    private $db = null;

    public function getConnection(){
        if($this->db === null){
            try{
                $this->db = new PDO('mysql:host=localhost;dbname=hotel','root','');
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException){
                die("impossible de se connecter à la bdd");
            }
        }
        return $this->db;
    }

    public function testPostValue($name){
        if (isset($_POST[$name]) && !empty($_POST[$name])) {
            return $_POST[$name];
        }
        return false;
    
    }

    public function register($postData) {
        $nom = $this->testPostValue("nom");
        $prenom = $this->testPostValue("prenom");
        $mail = $this->testPostValue("mail");
        $password = $this->testPostValue("password");
        $adress = $this->testPostValue("adress");
        $num = $this->testPostValue("num");
    
        // If any of the values are false (i.e., not set or empty), then return an error or exit the function.
        if (!$nom || !$prenom || !$mail || !$password || !$adress || !$num) {
            return "Toutes les données doivent être remplies.";
        }
    
        $conn = $this->getConnection();
        $sql = "INSERT INTO client (nom, prenom, mail, password, adress, num) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
    
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        return $stmt->execute([$nom, $prenom, $mail, $hashedPassword, $adress, $num]);
    }
}
    

?>