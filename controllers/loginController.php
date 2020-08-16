<?php
    require_once("./models/models.php");
class loginController {
    public $model;

    public function __construct()
    {
        $this->models = new Model();
    }

    /*
    *To do the login
    */
    public function doOrViewLogin()
    {
        $strSaveParams = '';
        if(!empty($_POST))
        {
            $strUsername        = $_POST['txtUsername'];
            $strPassword        = base64_encode($_POST['txtPassword']); //encoding the password to match with the encoded password in databases
            $resultLogin        = $this->models->doLogin($strUsername,$strPassword);
            if(!empty($resultLogin)){
                session_start();
                $_SESSION["firstName"] = $resultLogin['vchr_first_name'];
                $_SESSION["email"]     = $resultLogin['vchr_email'];
                
                header('Location: ./loginSuccess?s=loggedin');
            }
            else{
                header('Location: ./loginFailed?s=invalid');
            }
        }
    }
}

?>
