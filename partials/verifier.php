<?php
include_once('connector.php');
include_once('classUser.php');
session_start();

$id=$_POST['Userid'];
$pass=$_POST['Password'];

$users = new User();

$user= $users->fetch_user($id);

if($user!=NULL)
{
    echo $user['User_id']." ".$user['User_password'];
    $_SESSION['user_name'] = $user['User_name'];
    $_SESSION['login']=True;
    $_SESSION['user_id']=$user['User_id'];
    header("Location:../Welcome.php");
}
else{
    echo "No such user";
    header("Location:../Login.php");
}
?>