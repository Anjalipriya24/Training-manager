<?php session_start();
include('connection.php');

//Code for Registration 
if(isset($_POST['submit']))
        {
        $trainingname=$_POST['trainingname'];
        $trainingtype=$_POST['trainingtype'];
        $trainingdescription=$_POST['trainingdescription'];
        $trainingrequiredaround=$_POST['trainingrequiredaround'];
        $concerndepartment=$_POST['concerndepartment'];
        $trainingidentifiedby=$_POST['trainingidentifiedby'];
        $trainingidentifieddate=$_POST['trainingidentifieddate'];
        //$sql=$con->query("SELECT id FROM tdls WHERE trainingname=$trainingname");
        
	$msg=mysqli_query($con,"insert into trainingdetails(trainingname,trainingtype,trainingdescription,trainingrequiredaround,concerndepartment,trainingidentifiedby,trainingidentifieddate) values('$trainingname','$trainingtype','$trainingdescription','$trainingrequiredaround','$concerndepartment','$trainingidentifiedby','$trainingidentifieddate')");

if($msg)
{
	echo "<script>alert('Register successfully');</script>";
	header('Location:displayi.php'); 
}
}
	
	?>