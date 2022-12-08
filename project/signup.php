<?php
session_start();

if(isset($_POST['firstname'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("Connection to the database failed due to" .mysqli_connect_error());
}
// echo "Success connecting to the database";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];


$sql="INSERT INTO `phpproject`.`signupdata` (`firstname`, `lastname`, `username`, `email`, `contact`, `password`, `confirm password`, `date`) VALUES ('$firstname', '$lastname', '$username', '$email', '$contact', '$password', '$confirmpassword', current_timestamp());";
// echo $sql;

if($con->query($sql)==true){
    $_SESSION['signup']=true;
    $showAlert=true;
    // echo "Successfully inserted";


}
else{
    echo"Error!:$sql <br> $con->error";
}
$con->close();

}
header('location:index.php');
  
    
?>


