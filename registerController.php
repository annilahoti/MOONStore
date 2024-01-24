<?php

include 'User.php';
include 'userRepository.php';

if (isset($_POST['signupbtn'])) {
    if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = rand(1,999);
        $roli = "user";

        $user = new User($id,$name,$surname,$email,$password,$roli);
        $userRepository = new UserRepository();

        $userRepository->insertUsers($user);
        header("Location: home.php");
    }
}