<?php

session_start();
$_SESSION['signin']=false;
$_SESSION['signup']=false;

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $_SESSION['username'] = $_POST['Username'];
//     $_SESSION['password'] = $_POST['Password'];   
    
// }
$server = "localhost";
$username = "root";
$password = "";
$database="phpproject"; 

   
$conn=mysqli_connect($server, $username, $password,$database);

$user=$_REQUEST['email'];
$pass=$_REQUEST['password'];

if(!$conn){
    echo 'SERVER NOT RESPONDING, We regret for the inconvenience.';
}
else{
    $sql="SELECT * FROM `signupdata` where `email`='$user' AND `password`='$pass'";
    $result=mysqli_query($conn, $sql);
    $num= mysqli_num_rows($result);
    if($num){
        $_SESSION['username']=$user;
        $_SESSION['password']=$pass;
        $_SESSION['signin']=true;
        header('Location: https://techgrade7.blogspot.com/');
    }
    else{
        header('Location:index.php');
    }
    
}
?>
