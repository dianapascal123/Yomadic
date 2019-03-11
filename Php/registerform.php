<?php include ('register.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" type="text/css" href="/CSS/error-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/my-form.css">
        <link rel = "stylesheet" href = "/css/bootstrap.min.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/headerstyle.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Pacifico" rel="stylesheet">
        <!-- disable the submit buttons when page is loaded -->
        <script src = "/Javascript/submitButtonDisable.js"></script>
    </head>
    <?php include("header.php");?>
    <body> 
        <div class = "container my-form">
            <div class = "row">
                <div class = "col-lg-3"></div>
                <div class = "col-lg-6">
                <h1>Sign Up</h1>
                <div class = "col-lg-3"></div>
            </div>
            <div class = "row">
                <div class = "col-lg-3"></div>
                <div class = "col-lg-6">
                    <form method="post" action="registerform.php">                   
                        <?php include('errors.php') ?>
                        <div class = "row">
                            <div class = "col-lg-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" name = "fistname">
                            </div>
                            <div class="col-lg-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" name = "lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name = "username" value="<?php echo $username; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name = "password">
                            
                            <small id="passwordHelpInline" class="text-muted">
                                Must be minimum 6 characters long and must contain at least one digit.
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="checkpassword">Check Password</label>
                            <input type="password" class="form-control" name = "check_password">
                        </div>
                            <button type="submit" class="btn" id = "submit-button" name = "register-button">Submit</button>
                    </form>
                </div>
                <div class = "col-lg-3"></div>
            </div>       
        </div>
    </body>
</html>