<?php session_start();?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="main.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    </head>
    <body id="contactUs">
        <?php require('partials/_nav.php')?>
        <div id="contactInfo">
            <h1>Contact Us</h1>
            <p>Campervan Pvt Limited</p>
            <p>campervan_pvt_ltd@gmail.com</p>
            <p>telephone placeholder</p>
        </div>

        <div id="messageUs">
            <h1>Message Us</h1>
        <form>
            
            <input type="text" id="name" placeholder="Name" class="inp">
            <input type="text" id="email" placeholder="email" class="inp"></br>
            <input type="text" id="phone" placeholder="phone" class="inp">
            <input type="text" id="address" placeholder="address" class="inp"></br>
            <input type="text" id="subject" placeholder="subject" class="inp"></br>
            <textarea id="msg"  placeholder="Type your message here" class="inp"></textarea>
        </br>
            <button type="submit" id="submitbtn">Submit</button>
             
        </form>
    </div>