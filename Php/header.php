<div class = "header">
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm fixed-top">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class = "row">
                <div class = "col-lg-4 col-md-4 col-sm-4">
                    <div class="navbar-nav navbar-center">
                        <a class="nav-item nav-link active" href="../main.php">Home </a>
                        <a class="nav-item nav-link" href="/Php/destinationspage.php">Destinations</a>
                        <a class="nav-item nav-link" href="/Php/traveltips.php">Travel Tips</a>
                        
                    </div>
                </div>
                <div class = "col-lg-4 col-md-4 col-sm-4">
                    <h2>Yomadic</h2>
                </div>

                <!-- check if user is logged in -->
                <?php
                    // if user is logged in, display log out button and hide log in and sign up buttons
                    
                    if(isset($_SESSION['user']) && !empty($_SESSION['user']))
                        { 
                ?>
                    <div class = "col-lg-4 col-md-4 col-sm-4 text-right">
                        <button type = "button" class = "btn btn-header" id = "log-out">Log out</button>
                    </div>
                    <!-- file for redirect to page where session is destroyed -->
                    <script src = "/Javascript/logoutRedirect.js"></script>
                <?php 
                    } else { 
                            // if user is not logged in, display log in and sign up buttons
                ?>
                    <div class = "col-lg-4 col-md-4 col-sm-4 text-right">
                        <button type = "button" class = "btn btn-header" id = "log-in">Log in</button>
                        <button type = "button" class = "btn btn-header" id = "sign-up">Sign up</button>
                    </div>

                    <!-- file to redirect to log in and sign up forms -->
                    <script src = "/Javascript/loginSignupForm.js"></script>
                    <?php } ?>
            </div>
        </div>
    </nav>
</div>
   