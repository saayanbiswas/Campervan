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
}