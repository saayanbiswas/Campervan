<?php

include_once('./partials/connector.php');
include_once('./partials/classUser.php');
session_start();



if (empty($_POST))
    echo "EMPTY!!";

$Hub=$_POST['Hub'];
$Rent_Date=$_POST['Rent_Date'];
$Rent_Type=$_POST['Rent_Type'];
$Renting_Hours=$_POST['Renting_Hours'];
$Van=$_POST['Van'];
$Cost=$_POST['Cost'];
$users= new User();

$users->Book($_SESSION['user_id'], $Hub, $Rent_Date, $Rent_Type, $Renting_Hours, $Van, $Cost);



echo "Booking Successful";

?>