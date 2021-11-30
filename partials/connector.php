<?php

    try{
        $pdo= new PDO("mysql:host=localhost; dbname=campervan", 'root', '');
    }
    catch(PDOException $e) {
       
        exit('Database error');
    }
?>