
<?php  

include 'User.php';
include 'userRepository.php';

if (isset($_POST['signupbtn'])) {
    if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
        echo "Fill all fields!";
    }else{

        $email = $_POST['email'];
$usersQuery = "SELECT * FROM user WHERE email='$email'";
$usersResult = mysqli_query($conn, $usersQuery);
$emailCount = mysqli_num_rows($usersResult);

if($emailCount==0){

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id;
        $editedBy;
        $roli = "user";
        $user = new User($id,$name,$surname,$email,$password,$roli,$editedBy);
        $userRepository = new UserRepository();

        $userRepository->insertUsers($user);
        header("Location: logIn.php");
    } 
    else{
    echo "User Already Exists!";
}
}
}
