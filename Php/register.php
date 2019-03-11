<?php
    include ('db_connection.php');
    session_start();
    $username = "";
    $errors = array();

    if (isset($_POST['register-button'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $checkPwd = $_POST['check_password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        if(empty($username)) 
            array_push($errors, "Username is required");
        else 
             {   //check if username is is data base
                $query = "SELECT * FROM users WHERE username = '$username'";
                $result = mysqli_query($conn, $result);
                if (mysqli_num_rows($result) > 0)
                    array_push($errors, "Username is taken");
            }
        if (empty($password))
            array_push($errors, "Password is required");
        else 
        {
            //check if password has at least 6 characters and has at least one digit
            if (strlen($password) < 6)
                array_push($errors, "Password not long enough");
            if (!preg_match("#[0-9]+#", $password))
                array_push($errors, "Password must contain at least one digit");
        }
        // check if passwords match
        if ($password != $checkPwd)
            array_push($errors, "The two passwords do not match");
        // insert user in data base
        if (!count($errors)) 
        {   
            // encrypt password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (firstname, lastname, username, password, created_at)
                      VALUES ('$firstname', '$lastname', '$username', '$hashed_password', now())";
            mysqli_query($conn, $query);
            $user_query = mysqli_query($conn, "SELECT * FROM users where username = '$username' LIMIT 1");
            // start session for user which registered up
            $user = mysqli_fetch_assoc($user_query);
            $_SESSION['user'] = $user;
            // redirect to previous page
            header('Location:' . $_SESSION['last_visited']);
            die();
        }
    }
?>