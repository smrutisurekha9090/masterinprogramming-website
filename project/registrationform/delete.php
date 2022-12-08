<?php
session_start();
include 'connection.php';
$id=$_GET['id'];
 $delete_query="delete from student_reg_form where student_id=$id";
 $query=mysqli_query($conn,$delete_query);
 
 header('location:display.php');

?>