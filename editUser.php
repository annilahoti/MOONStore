
<?php
$userId = $_GET['id'];
include_once 'userRepository.php';
include_once 'databaseConnection.php';
include_once 'User.php';

$userRepository = new UserRepository();
$usersQuery = "SELECT * FROM user where id=$userId";
$usersResult = mysqli_query($conn, $usersQuery);

while($row = mysqli_fetch_assoc($usersResult)){
    $user = new User(
        $row['id'],
        $row['name'],
        $row['surname'],
        $row['email'],
        $row['password'],
        $row['roli']
    );
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=intval($user->getId())?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$user->getName()?>"> <br> <br>
        <input type="text" name="surname"  value="<?=$user->getSurname()?>"> <br> <br>
        <input type="text" name="email"  value="<?=$user->getEmail()?>"> <br> <br>
        <input type="text" name="password"  value="<?=$user->getPassword()?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user->getId();
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
 

    $userRepository->updateUser($id,$name,$surname,$email,$password);
    header("location: Dashboard.php");
}


?>