<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="./main.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    </head>
    <body id="aboutUs">
        <div id="navbar">
            <div id="title">
                <p id="title1">CAMPERVAN</p>
                <p id="title2">A Vacation on Wheels</p>
            </div>
            <div id="login">
                <a href="#">Login</a> | <a href="#">Sign Up</a>
            </div>
        
            <ul id="nav">
                <li><a href="main.php">Home</a></li>
                <li><a href="About Us.php">About Us</a></li>
                <li><a href="#">Booking/Reservation</a></li>
                <li><a href="Contact Us.php">Contact Us</a></li>
            </ul>
        </div>
        <h1 style="text-align: center">User Log In</h1>
        <div id="LoginBox" >
            <center><form method="POST" action="partials/verifier.php">
                
                <input type="text" class="loginInput" placeholder="Username" name="Userid" >
                </br>
                <input type="text" class="loginInput" placeholder="Password" name="Password">
                </br>
                <button type="submit" id="loginBtn">Login</button>
            </form></center>
        </div>

    </body>
</html>