<?php
session_start();
include'connection.php';
// checking session is valid for not 
//if (strlen($_SESSION['trainingid']==0)) {
  //header('location:display.php');
//  } else{

// for deleting user
if(isset($_GET['id']))
{
$feedbackTypeId=$_GET['id'];
$msg=mysqli_query($con,"delete from feebacktype where feedbackTypeId='$feedbackTypeId'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
header('location:viewFeedbackType.php');
}
}
  ?>