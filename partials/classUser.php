<?php

class User{
    public function fetch_all(){
        global $pdo;
        $query= $pdo->prepare("SELECT * from users");
        $query->execute();

        return($query->fetchAll());
    }

    public function fetch_user($user_id){
        global $pdo;
        $query= $pdo->prepare("SELECT * FROM users WHERE user_id='$user_id'");
        //$query->bindValue(':user_id',$user_id);
        $query->execute();
        return($query->fetch());
    }

    public function create_user($user_id, $user_email, $user_password, $user_name,$user_contact){
        global $pdo;
        $query=$pdo->prepare("INSERT INTO users VALUES('$user_id','$user_email', '$user_password', '$user_name', '$user_contact')");
        $query->execute();
    }

    public function Book($user_id, $Hub, $Rent_Date, $Rent_Type, $Renting_Hours, $Van, $Cost)
    {
        global $pdo;
        $query=$pdo->prepare("INSERT INTO trips VALUES('$user_id','$Hub','$Rent_Date','$Rent_Type','$Renting_Hours','$Van','$Cost')");
        $query->execute();
    }
    

}