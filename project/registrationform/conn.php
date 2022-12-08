<?php
session_start();
$insert = false;
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '<br>';
    // print_r($_FILES);

    // exit;

if(isset($_POST['First_name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database ="sam_reg_details";                                     
    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$database);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    else{
        $fileName=$_FILES['fileToUpload']['name'];
        $tempFileLoc=$_FILES['fileToUpload']['tmp_name'];
        $folderLoc='photo_upload/';
        $fileLoc= $folderLoc.$fileName;
        move_uploaded_file($tempFileLoc,$fileLoc);
        
        $First_name = $_REQUEST['First_name'];
        $Last_name= $_REQUEST['Last_name'];
        $Parents_name = $_REQUEST['Parents_name'];
        $Class = $_REQUEST['Class'];
        $CategoryId = $_REQUEST['Category'];
        $Gender  = $_REQUEST['Gender'];
        // $Facility = $_REQUEST['Facility'];
        $ReligionId = $_REQUEST['Religion'];
        $Email = $_REQUEST['Email'];
        $Password=$_REQUEST['Password'];
        $Contact = $_REQUEST['Contact'];
        $Address  = $_REQUEST['Address'];
        $DoB = $_REQUEST['DoB'];   

        if(isset($_SESSION['editForm'])){

                $stu_id=$_SESSION['reset_student_id'];
                $sqld="UPDATE `student_reg_form`
                SET First_name='$First_name', Last_name='$Last_name', Parents_name='$Parents_name', Class='$Class', Gender='$Gender',
                Religion_id='$ReligionId', category_id='$CategoryId',Email='$Email', Contact='$Contact', `Address`='$Address',
                DoB='$DoB', fileLoc='$fileLoc' 
                WHERE student_id='$stu_id' ";
                $results=mysqli_query($con,$sqld);

                $sql_fdelete="DELETE FROM `facilities_student` WHERE student_id=$stu_id ";
                $result_fdelete=mysqli_query($con,$sql_fdelete);

                $facility_arri=$_REQUEST['facilities'];
                foreach ($facility_arri as $value) {
                $sqld_facility="INSERT INTO `facilities_student` (student_id,facilities_id)
                VALUES ('$stu_id','$value')";
                mysqli_query($con,$sqld_facility);
                }
                $_SESSION['editForm']=true;
                header('Location: display.php');
        }
        else{
            $sql = "INSERT INTO `student_reg_form` (`First_name`, `Last_name`, `Parents_name`, `Class`, `category_id`, `Gender`, `Religion_id`, `Email`, `Password`, `Contact`, `Address`, `DoB`,`fileLoc`,`DateTime`) VALUES ('$First_name', '$Last_name', '$Parents_name', '$Class', '$CategoryId', '$Gender', '$ReligionId', '$Email', '$Password', '$Contact', '$Address', '$DoB','$fileLoc',current_timestamp());";

            $result=mysqli_query($con,$sql);
            $last_studentId=mysqli_insert_id($con);
            $facility_arr=$_REQUEST['facilities'];
            
            foreach ($facility_arr as $value) {
            $sql_facility="INSERT INTO `facilities_student` (student_id,facilities_id)
            VALUES ('$last_studentId','$value')";

            mysqli_query($con,$sql_facility);
            }
        }


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
    $email = $_POST['Email'];


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'sunnykingsman123@gmail.com';
$mail->Password = '9097163644';
$mail->SMTPAuth = true;

$mail->From = 'sunnykingsman123@gmail.com';
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
    <img src=<?php echo $fileLoc; ?> height="200" width="300">
</body>
</html>
