<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Caravan Booking</title>
        <link rel="stylesheet" href="main.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    </head>
    <body id="aboutUs">
        <?php require('partials/_nav.php');?>
        <h1 style="text-align:center"> Campervan Reservation</h1>
        <?php 
        if (!(isset($_SESSION["login"]) && $_SESSION["login"] ==True))
        {
            echo "<h1>Please Log in and then try again</h1>";
        }
        else{
        ?>
        <center>
        <div id="BookingForm">
        <form action="./Billing.php" method="POST">
            <label class="BookingLabels" for="Hub">Select nearest renting hub</label>
            <select name="Hub">
                <option value="Goa">Goa</option>
                <option value="Ladakh">Ladakh</option>
                <option value="Rishikesh">Rishikesh</option>
                <option value="Jaisalmer">Jaisalmer</option>
            </select>
        </br></br>
            <label class="BookingLabels" for="Rent_Date">Date of Rent:</label>
            <input type="date" name="Rent_Date"/>
        </br></br>
            <label class="BookingLabels" for="Rent_Type">Rent Type:</label>
            <select name="Rent_Type">
                <option value="Night">Night Stay</option>
                <option value="Regular">Regular</option>
            </select>
        </br></br>
            <label class="BookingLabels" for="Renting_Hours">Renting Hours:</label>
            <input type="number" name="Renting_Hours"/>
            <p>*Max 13 Hours for Night Stay, 168 Hours for Regular*</p>
        </br></br>
            <h3>Select Van Type</h3>
            <img src="https://assets.newatlas.com/dims4/default/b4b3566/2147483647/strip/true/crop/1920x1080+0+0/resize/1440x810!/quality/90/?url=http%3A%2F%2Fnewatlas-brightspot.s3.amazonaws.com%2Farchive%2Fpinnacle-specialty-finetza-camper-van-2.jpg"
            width="300px" title="Pinnacle Finetza"/>
        </br>
            <input type="radio" id="Van-pinnacle" name="Van" value="Pinnacle">
            <label for="Pinnacle">Pinnacle Finetza [Large Size]</label>
        </br>
            <img src="https://i.ytimg.com/vi/CqhEEB5zWBo/hqdefault.jpg" width=300px/>
        </br>
            <input type="radio" id="Van-Volkswagen" name="Van" value="Volkswagen">
            <label for="Volkswagen">Volkswagen Grand California 680 [Medium Size]</label><br>
            <input type="submit" value="Submit">
        </form>
        </div></center>





<?php }?>
    </body>
</html>