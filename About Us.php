<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <title>About Us</title>
        <link rel="stylesheet" href="main.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    </head>
    <body id="aboutUs">
        <?php require('partials/_nav.php');?>
            <div id="aboutUs-text">
                <h1>About Our Company</h1>
                <h3>Bring Comfort wherever you go</h3>
                <p>Our start up focuses on providing the best comfort to our customers while they are on their adventures. We will buy RVs or as</br>
                they are called recreational vehicles and then modify them by making them look like moving homes providing the best comfort</br>
                and even attach solar panels to the vehicles so that it never runs out of energy and the travelers can also</br>
                access the energy to charge their gadgets.</br>
                We will be putting the RVs on rent for the tourists and that will be our source of Income. Tourists can book our vehicles and we</br>
                will deliver the vehicles to the desired locaiton. Thus our company is 'vehicle renting company'.</p>
            </div>
            <div id="gallery-window">
                <h1>What we offer</h1>
                <img id="photo" src="">
                <button id="left" onclick="showPrevImg()" ><</button>
                <button id="right" onclick="showNextImg()">></button>
            </div>
            
            <script src="aboutUs.js"></script>

    </body>
</html>