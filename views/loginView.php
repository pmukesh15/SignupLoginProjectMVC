<html>
<head>
    <style>
        label {
            width:90px;
            display: inline-block;
        }
    </style>
</head>
 <body>
    <form action ="./doLogin" method = "POST">
    <p>
        <label>
            Username
        </label>
        <input type = "email" id = "txtUsername" name = "txtUsername" required = "true" />
        <br/>
    </p>
    <p>
        <label>
            Password
        </label>
        <input type = "password" id = "txtPasword" name = "txtPassword" required = "true" minlength="8"/>
        <br/>
    </p>
    <p>
        <button type="submit" id = "btnSbmit">Login</button>
        <button type="reset" id = "btnReset">Cancel</button>
    </p>
    <p>
        <a href="./signup">Register</a>
    </p>
    </form>
 </body>
</html>