<html>

<body>
    <?php

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
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $contactno=$_POST['contactno'];
    $college=$_POST['college'];
    $branch=$_POST['branch'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pin=$_POST['pin'];
    
    $sql="INSERT INTO `phpproject`.`enrollnow` (`firstnam`, `lastname`, `email`, `gender`, `contactno`, `college`, `branch`, `city`, `state`, `pin`, `Time`) VALUES ('$firstname', '$lastname', '$email', '$gender', '$contactno', '$college', '$branch', '$city', '$state', '$pin', current_timestamp());";
    // echo $sql;
    
    if($con->query($sql)==true){
        echo "Successfully inserted";
    
    }
    else{
        echo"Error!:$sql <br> $con->error";
    }
    $con->close();
}
    
    // header('location:index.php');


?>
</body>

</html>