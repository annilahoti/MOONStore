<?php
include('user.php');
include('userRepository.php');


if(isset($_POST["loginbtn"])){
    if(empty($_POST["email"]) || empty($_POST["password"])){
        echo '<script>alert("Please fill in all the fields");</script>';
    }
    else{
        $email = $_POST['email'];
        $password = $_POST['password'];
        $users = [];

        $usersQuery = "SELECT * FROM user";
        $usersResult = mysqli_query($conn, $usersQuery);


        while($row = mysqli_fetch_assoc($usersResult)){
            $user = new User(
                $row['id'],
                $row['name'],
                $row['surname'],
                $row['email'],
                $row['password'],
                $row['roli'],
                $row['editedBy']
            );
            $users[]=$user;
        }
    $i=0;
    foreach($users as $user){
       if($user->getEmail()==$email && $user->getPassword()==$password){
            session_start();
            $_SESSION["id"] = $user->getId();
            $_SESSION["name"] = $user->getName();
            $_SESSION["surname"] = $user->getSurname();
            $_SESSION["email"] = $user->getEmail();
            $_SESSION["role"] = $user->getRole();
            $_SESSION["loginTime"]= date("h:i:s");
            header("Location: home.php");
            exit();
        }
        else{
            $i++;
            if($i==sizeof($users)){
                echo "Incorrect email or password!";
                exit();
            }
        }
    }
    }
}

?>