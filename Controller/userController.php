<?php 
require_once __DIR__ . "/../Model/user.php";

class UserController {
    
    public function process($action){
        if($action == "C"){
            // Class que preenche o db em Model/user.php
            $newUser = new User();
            // Recupero os inputs com o "name" em View/register.php 
            $newUser -> setNationality($_POST['userCountry']);
            $newUser -> setUserName($_POST['userName']);
            $newUser -> setDteBirth($_POST['dateBirth']);
            $newUser -> setFiscalCode($_POST['fiscalCode']);
            $newUser -> setPhoneNumber($_POST['celNumber']);
            $newUser -> setSex($_POST['sexUser']);
            $newUser -> setEmail($_POST['email']);
            $newUser -> setPassword($_POST['password']);

            // chamo o metodo que registra o usuario
            $newUser -> registerUser();
        }
    }
}