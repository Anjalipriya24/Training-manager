<?php
session_start();
include'connection.php';

if(isset($_POST['Submit']))
{
	$trainingname=$_POST['trainingname'];  //Training Name
	$trainingtype=$_POST['trainingtype'];  //Training Type
	$trainingdescription=$_POST['trainingdescription'];  //Training Description 
	$trainingrequiredaround=$_POST['trainingrequiredaround'];  //Training Required Round 
	$concerndepartment=$_POST['concerndepartment'];  //Concern Department
    $trainingidentifiedby=$_POST['trainingidentifiedby']; //Training Identified By
    $trainingidentifieddate=$_POST['trainingidentifieddate']; //Training Identified Date
    $trainingapprovedby=$_POST['trainingapprovedby']; 
    $trainingapproveddate=$_POST['trainingapproveddate'];
	$status=$_POST['status'];
  $trainingid=($_POST['trainingid']);
$query=mysqli_query($con,"update trainingdetails set trainingname='$trainingname',trainingtype='$trainingtype',trainingdescription='$trainingdescription',trainingrequiredaround='$trainingrequiredaround',concerndepartment='$concerndepartment',trainingidentifiedby='$trainingidentifiedby',trainingidentifieddate='$trainingidentifieddate',trainingapprovedby='$trainingapprovedby',trainingapproveddate='$trainingapproveddate' where trainingid=$trainingid ");
$_SESSION['msg']="Profile Updated successfully";
header('location:displayu.php');
}
?>