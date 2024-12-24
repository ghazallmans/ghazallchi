<?php
$db=mysqli_connect('localhost','root','','shop');
if (!$db){
    echo mysqli_connect_error();
}
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $check = mysqli_query($db, "SELECT * FROM users WHERE  email='$email'AND password='$pass'");
    if (mysqli_num_rows($check) > 0) {
        $_SESSION['user'] = $email;
        header('Location:index.php');
        exit();
    } else {
        echo "<script>alert('ایمیل یا گذرواژه خودرا اشتباه وارد نموده اید!')</script>";
    }
}
