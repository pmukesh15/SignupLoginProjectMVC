<html>
<head>
</head>
 <body>
   <?php
   if(!empty($_GET['s']))
   {
    if($_GET['s']=="success"){ // success of sign up
        echo "Welcome! <br/>";
        echo "You have successfully signed up, please login with your credentials.";
    }
    else if($_GET['s']=="exists"){ // if the user is already exists
        echo "User Already Exists !, please login with your credentials.";
    }
    else if($_GET['s']=="invalid"){ // if tried to login with bogus credentials
        echo "Invalid Login Details !, please try again.";
    }
    else if($_GET['s']=="loggedout"){ // if user logged out
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        unset($_SESSION['firstName']);
        session_destroy();
        echo "You have successfully logged out !";
    }
    else{ // if the url status value is wrong
        echo "Welcome!"; 
    }
   }
   else{ // default view
    echo "Welcome!"; 
   }
   ?>
   <br/>
   <a href="./login">Login</a>
   <br/>
   <a href="./signup">Signup</a>
 </body>
</html> 