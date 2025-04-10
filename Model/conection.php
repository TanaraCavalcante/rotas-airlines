<?php

// Logica para conexao com database
class Conection {
    public function connect(){
        $servername = "localhoster";
        $username = "root";
        $password = "";

        try{
            $conn = new PDO("mysql:host=$servername; dbname=rotaairlines", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Success to conection with database!";
            return $conn;
        }catch(PDOException $e){
            echo "Fail conection with database!" . $e->getMessage();
            return null;
        }
    }  
        
}
?>