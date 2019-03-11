<?php
    $nameErr = $passwordErr = "";
    function validateName() {
        if (empty($_POST["uname"]))
            $nameErr = "User name is required";
        else 
            {
                $name = $_POST["uname"];
                if (!preg_match("/^[a-zA-Z]*&", $name))
                    $nameErr = "User name can contain only letters";
            }
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
                $passwordErr = "Passwords don't match";
            
        }
    }
    
?>