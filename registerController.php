<?php

include('user.php');
$usersArray = [];

$user1 = new User(1,"Anila","Hoti","anilahoti@gmail.com","anila123","admin");
$user2 = new User(2,"endritmusaj","endritmusaj@gmail.com","endrit123","user");
$user3 = new User(3,"arbisonkrasniqi","arbisonkrasniqi@gmail.com","arbison123","user");
$user4 = new User(4,"arbreshahoxha","arbreshahoxha@gmail.com","arbresha123","user");

$usersArray[] = $user1;
$usersArray[] = $user2;
$usersArray[] = $user3;


if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['password'])){
        echo "Please fill the required fields!";
    }
    else{
        $email = $_POST['email'];
        $password = $_POST['password'];
        $i=0;
        foreach($users as $user){
            if($user->getEmail()==$email && $user->getPassword()==$password){
                $_SESSION['name'] = $user->getName();
                $_SESSION['surname'] = $user->getSurname();
                $_SESSION['email']= $user->getEmail();
                $_SESSION['password']= $user->getPassword();
                $_SESSION['role'] = $user->getRole();
                $_SESSION['loginTime'] = date("H:i:s");
                header("Location: home.php");
                exit();
            }
            else{
                $i++;
                if($i==sizeof($users)){
                    echo "Incorrect Email or Password!!";
                    exit();
                }
            }
    }
}
}

?>