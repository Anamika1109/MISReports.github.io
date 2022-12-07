<?php 
 
 session_start();

 $sname = "localhost";
$uname = "root";
$dbpwd = "";
$dbname = "eteams";
$conn = mysqli_connect($sname, $uname, $dbpwd, $dbname);
if(!$conn){
    echo " Connection Failed";
}

    $email = $_POST['email'];
    $pass = $_POST['pwd'];

    $querry = "select * from login_pwd where Email = '$email' && Password = '$pass' ";

    $result = mysqli_query($conn, $querry);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        header('location:home.html');
    }else {
        header('location:index.php');
    }

 ?>