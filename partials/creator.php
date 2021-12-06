<?php
include_once('connector.php');
include_once('classUser.php');
session_start();

$id=$_POST['Userid'];
$pass=$_POST['Password'];
$name= $_POST['Name'];
$contact=$_POST['Contact'];
$email=$_POST['Email'];
$users = new User();

$user= $users->fetch_user($id);

if($user==NULL)
{
    $users->create_user($id,$email,$pass,$name,$contact);
    $_SESSION['user_name'] = $user['User_name'];
    $_SESSION['login']=True;
    $_SESSION['user_id']=$user['User_id'];
    header("Location:../Welcome.php");
}
else{
    echo "User already exists";
    header("Location:../SignUp.php");
}
?>