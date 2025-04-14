<?php
// conexao com database
require_once __DIR__ ."/conection.php";

class User{
    private $id = null;
    private $name;
    private $email;
    private $dteBirth;
    private $nationality;
    private $phoneNumber;
    private $fiscalCode;
    private $password;
    private $sex;

    public function registerUser(){
        try{
            //conexao com db
            $conn = Conection::connect();
            // insiro os dados diretamente no db
            $sql = $conn->prepare(
                "insert into rotaairlines.users (name, email, dteBirth, nationality, phoneNumber, fiscalCode, password, sex)
                 values(:name, :email, :dteBirth, :nationality, :phoneNumber, :fiscalCode, :password, :sex)"
            );
            // recupero os inputs e insiro dentro das values de forma segura
            $sql -> bindParam("name", $name);
            $sql -> bindParam("email", $email);
            $sql -> bindParam("dteBirth", $dteBirth);
            $sql -> bindParam("nationality", $nationality);
            $sql -> bindParam("phoneNumber", $phoneNumber);
            $sql -> bindParam("fiscalCode", $fiscalCode);
            $sql -> bindParam("password", $password);
            $sql -> bindParam("sex", $sex);

            $name =  $this->name;
            $email = $this->email;
            $dteBirth =  $this->dteBirth;
            $nationality = $this->nationality;
            $phoneNumber = $this->phoneNumber;
            $fiscalCode = $this->fiscalCode;
            $password = $this->password;
            $sex = $this->sex;

            // insiro no database
            $sql->execute();

        }catch(PDOException $e){
            echo "Fail Conection!" . $e->getMessage();
        }
    }
    
    // Setters and getters
    //ID
    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    //Name
    public function getUserName():string{
        return $this->name;
    }

    public function setUserName(string $name):void {
        $this->name = $name;
    }

       // Email
       public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    // Date of Birth
    public function getDteBirth(): string {
        return $this->dteBirth;
    }

    public function setDteBirth(string $dteBirth): void {
        $this->dteBirth = $dteBirth;
    }

    // Nationality
    public function getNationality(): string {
        return $this->nationality;
    }

    public function setNationality(string $nationality): void {
        $this->nationality = $nationality;
    }

    // Phone Number
    public function getPhoneNumber(): string {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): void {
        $this->phoneNumber = $phoneNumber;
    }

    // Fiscal Code
    public function getFiscalCode(): string {
        return $this->fiscalCode;
    }

    public function setFiscalCode(string $fiscalCode): void {
        $this->fiscalCode = $fiscalCode;
    }

    // Password
    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    // Sex
    public function getSex(): string {
        return $this->sex;
    }

    public function setSex(string $sex): void {
        $this->sex = $sex;
    }
}
