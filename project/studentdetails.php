<?php
$insert = false;
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '<br>';
    // print_r($_FILES);

    // exit;

if(isset($_POST['firstname'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database ="phpproject";
    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$database);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    else{
        $fileName=$_FILES['fileToUpload']['name'];
        $tempFileLoc=$_FILES['fileToUpload']['tmp_name'];
        $folderLoc='uploaded_images/';
        $fileLoc= $folderLoc.$fileName;
        move_uploaded_file($tempFileLoc,$fileLoc);

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $fathername=$_POST['fathername'];
        $mothername=$_POST['mothername'];
        $category=$_POST['category'];
        $address=$_POST['address'];
        $religion=$_POST['religion'];
        $hostel=$_POST['hostel'];
        // $file=$_FILES['file'];
 

        $sql = "INSERT INTO `displayupload` (`firstname`, `lastname`, `dob`, `email`, `contact`, `gender`, `fathername`, `mothername`, `category`, `address`, `religion`, `hostel`, `fileLoc`, `date`) VALUES ('$firstname', '$lastname', '$dob', '$email', '$contact', '$gender', '$fathername', '$mothername', '$category', '$address', 
        '$religion', '$hostel', '$fileLoc', current_timestamp());";

        $result=mysqli_query($con,$sql);
    }
    // if($con->query($sql)==true){
    //     // echo "Successfully inserted";
    
    // }
    // else{
    //     echo"Error!:$sql <br> $con->error";
    // }
    // $con->close();
}
?>


<!--Mail sending in php-->

<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';


if(isset($_POST['submit'])){
    $email = $_POST['email'];


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'luckysushil0147@gmail.com';
$mail->Password = 'sumitra321';
$mail->SMTPAuth = true;

$mail->From = 'luckysushil0147@gmail.com';
$mail->FromName = 'Registration cell';
$mail->AddAddress($email);


$mail->IsHTML(true);
$mail->Subject    = "Student registration";
$mail->Body    = "You have been successfully registered the form.";

if(!$mail->Send())
{
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
  echo "Confirmation mail has been sent.!";
}
}

?>

<!-- image uploading  file location details  -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src=<?php echo $fileLoc; ?>>
</body>
</html>
