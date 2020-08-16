<?php

$request = $_SERVER['REQUEST_URI'];

//logging out and clearing unsetting the session
if($request == '/SignupLoginProjectMVC/logout?s=loggedout'){
    require __DIR__ . '/views/welcome.php';
    return;
}  

//start the session if it is not set already
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

//checking the user is already logged in
if(!empty($_SESSION['firstName']))
{
    require __DIR__ . '/views/loginAction.php';
    return;
}

//handling the routes
switch ($request) {
    case '/SignupLoginProjectMVC/' :
        require __DIR__ . '/views/welcome.php';
        break;
    case '/SignupLoginProjectMVC/login' :
        require __DIR__ . '/views/loginView.php';
        break;
    case '/SignupLoginProjectMVC/signup' :
        require __DIR__ . '/views/signupView.php';
        break;
    case '/SignupLoginProjectMVC/doSignup' :
        require __DIR__ . '/controllers/signupController.php';
        $doSignup = new signupController();
        $doSignup->doOrViewRegister();
        break;
    case '/SignupLoginProjectMVC/signupSuccess' :
        require __DIR__ . '/views/welcome.php?s=success';
        break;
    case '/SignupLoginProjectMVC/signupFailed?s=exists' :
        require __DIR__ . '/views/welcome.php';
        break;
    case '/SignupLoginProjectMVC/doLogin' :
        require __DIR__ . '/controllers/loginController.php';
        $doLogin = new loginController();
        $doLogin->doOrViewLogin();
        break;
    case '/SignupLoginProjectMVC/loginSuccess?s=loggedin' :
        require __DIR__ . '/views/loginAction.php';
        break;
    case '/SignupLoginProjectMVC/loginFailed?s=invalid' :
        require __DIR__ . '/views/welcome.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/welcome.php';
        break;
}
?>