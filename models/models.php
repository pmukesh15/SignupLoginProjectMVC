<?php

class Model {
    
    public function __construct()
    {
        require_once './config/config.php';
        $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }

    /*
    *To do the login
    */
    public function doLogin($strUsername,$strPassword)
    {
        try {
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $this->conn->prepare("SELECT vchr_email,vchr_first_name FROM tbl_user WHERE vchr_email='$strUsername' AND vchr_password='$strPassword' LIMIT 1");
            $sql->execute();
            $resultRow = $sql->fetch();
            if(!empty($resultRow)){
                return $resultRow;
            }
        } 
        catch(PDOException $e) 
        {
            return $sql . "<br>" . $e->getMessage();
        }
    }
    
    /*
    *To do the regstration
    */
    public function doSignup($saveParams)
    {
        try {
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO tbl_user (vchr_email, vchr_first_name, vchr_last_name, vchr_password, dat_dob)
            VALUES ($saveParams)";
            // use exec() because no results are returned
            $this->conn->exec($sql);
            return "Success";
          } catch(PDOException $e) {
            return $sql . "<br>" . $e->getMessage();
          }
    }
    /*
    *To check the existing user
    */
    public function checkExistingUser($strUsername)
    {
        try {
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $this->conn->prepare("SELECT vchr_email FROM tbl_user WHERE vchr_email='$strUsername' LIMIT 1");
            $sql->execute();
            $resultRow = $sql->fetch();
            if(!empty($resultRow)){
                return $resultRow;
            }
          } catch(PDOException $e) {
            return $sql . "<br>" . $e->getMessage();
          }

    }
}

?>