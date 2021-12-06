
        <div id="navbar">
            <div id="title">
                <p id="title1">CAMPERVAN</p>
                <p id="title2">A Vacation on Wheels</p>
            </div>
            <?php if (isset($_SESSION["login"]) && $_SESSION["login"] ==True){?>
            <div id="login">
                <a href="#"><?php echo $_SESSION['user_name']?></a> | <a href="partials/logout.php">Log Out</a>
            </div>
            <?php } else {?>
            <div id="login">
            <a href="Login.php">Login</a> | <a href="SignUp.php">Sign Up</a>
            </div>
            <?php } ?>
            <ul id="nav">
                <li><a href="main.php">Home</a></li>
                <li><a href="About Us.php">About Us</a></li>
                <li><a href="Booking.php">Booking/Reservation</a></li>
                <li><a href="Contact Us.php">Contact Us</a></li>
            </ul>
        </div>