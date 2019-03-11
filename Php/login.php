<?php 
    include ("db_connection.php");
    session_start();
    $errors = array();
    if (isset($_POST["log-in-button"]))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // check if username and password entered exist in data base
        $query = "SELECT * FROM users WHERE username = '$username'";
        $logged_user = mysqli_query($conn, $query);
        if (mysqli_num_rows($logged_user) == 1)
        {
            $row = mysqli_fetch_assoc($logged_user);
            if (password_verify($password, $row['password']))
            {
                // if they exists, start a session for that user and redirect to previos page
                $_SESSION['user'] = $row;
                header('Location:' . $_SESSION['last_visited']);
                die();
            }
        }
        else 
        {   
            array_push($errors, "Username or password invalid");
        }
    }
?>