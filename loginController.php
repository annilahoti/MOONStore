<?php
include('user.php');
$usersArray = [];

$user1 = new User(1,"Anila","Hoti","anilahoti@gmail.com","anila123","admin");
$user2 = new User(2,"Endrit","Musaj","endritmusaj@gmail.com","endrit123","user");
$user3 = new User(3,"Arbison","Krasniqi","arbisonkrasniqi@gmail.com","arbison123","user");
$user4 = new User(4,"Arbresha","Hoxha","arbreshahoxha@gmail.com","arbresha123","user");

$usersArray[] = $user1;
$usersArray[] = $user2;
$usersArray[] = $user3;
$usersArray[] = $user4;
$loggedIn = false;

    foreach($usersArray as $user){
        if($_POST['email']==$user->getEmail() && $_POST['password']==$user->getPassword()){
            session_start();
            $_SESSION['name'] = $user->getName();
            $_SESSION['email']= $user->getEmail();
            $_SESSION['role'] = $user->getRole();
            $_SESSION['loginTime'] = date("H:i:s");
            $loggedIn = true;
            break;
        } 
        }

if($loggedIn){
    header("Location: home.php");
    exit();
}
else{
    header("Location: login.php");
    exit();
}


?>