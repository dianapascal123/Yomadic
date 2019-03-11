<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Travel</title>
    </head>
    <body>
        <?php
            $nameErr = $passwordErr = $passwordMatchErr = "";
            function validateName() {
                if (empty($_POST["uname"]))
                    $nameErr = "User name is required";
                else 
                    {
                        $name = $_POST["uname"];
                        if (!preg_match("/^[a-zA-Z]*&", $name))
                            $nameErr = "User name can contain only letters";
                    }
                return $nameErr;
            }
            function validatePassword()
            {
                if(empty($_POST["pwd"]))
                    $passwordErr = "Password is required";
                if(empty($_POST["confirm_pwd"]))
                    $passwordErr = "You must confirm password";
                else 
                {
                    if (!preg_match("/^.*(?=.{6,})(?=.*[0.9])"))
                        $passwordErr = "Password must have at least 6 characters and one digit";
                    else if ($_POST["pwd"] != $_POST["confirm_pwd"])
                        $passwordMatchErr = "Passwords don't match";    
                }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $nameErr = validateName();
                echo $nameErr;
                validatePassword();
            }
        ?> -->
        <h2>Sign Up</h2>
        <form action = "form.php" method = "post">
        User Name: <br>
        <input type = "text" name = "uname"><br>
        <span class = "error">
            <?php echo $nameErr;?>
        </span>
        Password: <br>
        <input type = "password" name = "pwd"><br>
        <span class = "error">
            <?php echo $passwordErr; ?>
        </span>
        Confirm password: <br>
        <input type = "password" name = "confirm_pwd"><br>
        <span class = "error">
            <?php echo $passwordMatchErr; ?>
        </span>
        <input type = "submit" value = "Submit">
        </form>
    </body>
</html> -->





