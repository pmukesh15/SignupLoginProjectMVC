<?php
    require_once("./models/models.php");
class signupController {
    public $model;

    public function __construct()
    {
        $this->models = new Model();
    }

    /*
    *To do the registration
    */
    public function doOrViewRegister()
    {
        $strSaveParams = '';
        if(!empty($_POST))
        {
            $strEmail           = $_POST['txtEmail'];
            $strFirstName       = $_POST['txtFirstName'];
            $strLastName        = $_POST['txtLastName'];
            $strPassword        = base64_encode($_POST['txtPassword']); //to encode the password for security purpose
            $strDob             = $_POST['datDob'];
            $strSaveParams      = "'".$strEmail."','".$strFirstName."','".$strLastName."','".$strPassword."','".$strDob."'";
            //to check whether the user is already registered
            $checkExistingUser  = $this->models->checkExistingUser($strEmail);
            if(empty($checkExistingUser))
            {
                $result             = $this->models->doSignup($strSaveParams);
                if($result=="Success"){
                    header('Location: ./signupSuccess?s=success');
                }
                else{
                    header('Location: ./signup');
                }
            }
            else
            {
                header('Location: ./signupFailed?s=exists'); 
            }
        }
    }
}

?>
