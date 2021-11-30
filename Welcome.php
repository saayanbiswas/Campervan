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

        <h1> WELCOME <?php echo $_SESSION['user_name']?><h1>
    </body>
</html>