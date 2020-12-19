<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> register </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"> 
     <style>
    body {
       margin: 0;
       padding: 0 10px;
       box-sizing: border-box;
       font-family: 'Montserrat', sans-serif;
       background: #F5F5DC;
	   text align: center;
     }
	 h2 {
		 text-align: center;
	 </style>
<!-----------------------------------------------------------------------------division-------------------------------------------------------------------------------> 
    
</head>

		     <form class="form-detail" method="post">
                        <div class="form-right">
                                    <div class="form-group">
					<h2>TRAINING REPORT</h2>
                                    </div><br><br>
                                      
                                    <center>
                                        <table border="1">
                                            <thead style="color: #666; background-color: gray;"> 
                                                <tr> <th>Id</th>
                                                     <th>Name</th>
                                                     <th>Type</th>
                                                     <th>Description</th>
                                                     <th>Department</th>
                                                     <th>RequiredAround</th>
                                                     <th>IdentifiedBy</th>
                                                     <th>IdentifiedDate</th>
                                                     
                                                  
                                                     <th>Delete</th>
                                                </tr> 
                                            </thead> 
                                            <tbody>
                                                 <?php
                                                 error_reporting(0);
                                                 require('connection.php');
                                                 
                                                 $selectquery = "select * from `trainingdetails`";

                                                $query = mysqli_query($con, $selectquery);
                                                $nums = mysqli_num_rows($query);

                                                while($res = mysqli_fetch_array($query))
                                                {
                                                 ?>
                                                 <tr class="text-center">
                                                    <td><?php echo $res['trainingid']; ?></td>
                                                    <td><?php echo $res['trainingname']; ?></td>
                                                    <td><?php echo $res['trainingtype']; ?></td>
                                                    <td><?php echo $res['trainingdescription']; ?></td>
                                                    <td><?php echo $res['concerndepartment']; ?></td>
                                                    <td><?php echo $res['trainingrequiredaround']; ?></td>
                                                    <td><?php echo $res['trainingidentifiedby']; ?></td>
                                                    <td><?php echo $res['trainingidentifieddate']; ?></td>
                                                    <td><?php echo $res['trainingapprovedby']; ?></td>
                                                    <td><?php echo $res['trainingapproveddate']; ?></td>
                                                   
													<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['trainingid']; ?>"class="text-white">Delete </a> </button></td>
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table> 
                                    </center>
                              </div>
		    </form>
			</html>
		
    