<!-- Religion Connection from Data base -->

<?php
    $serverName="localhost";
    $userName="root";
    $password="";
    $database="sam_reg_details";    
    $conn=mysqli_connect($serverName, $userName, $password, $database);
    if(!$conn){
        die('SREVER NOT RESPONDING, We regret for the inconvenience.');
    }
?>
