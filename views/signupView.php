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
    <form action ="./doSignup" method = "POST">
    <p>
        <label>
            <span>Email</span>
        </label>
        <input type = "email" id = "txtEmail" name = "txtEmail" required = "true" />
        <br/>
    </p>
    <p>
        <label>
            <span>First Name</span>
        </label>
        <input type = "text" id = "txtFirstName" name = "txtFirstName" required = "true" />
        <br/>
    </p>
    <p>
        <label>
            <span>Last Name</span>
        </label>
        <input type = "text" id = "txtLastName" name = "txtLastName" required = "true" />
        <br/>
    </p>
    <p>
        <label>
        <span>Password</span>
        </label>
        <input type = "password" id = "txtPasword" name = "txtPassword" required = "true" minlength="8"/>
        <br/>
    </p>
    <p>
        <label>
        <span>Date of Birth</span>
        </label>
        <input type = "date" id = "datDob" name = "datDob" required = "true" style="width: 177px;"/>
        <br/>
    </p>
    <p>
        <button type="submit" id = "btnSbmit">Register</button>
        <button type="reset" id = "btnReset">Cancel</button>
    </p>
    <p>
        <a href="./login">Login</a>
    </p>
    </form>
 </body>
</html>
