<html>
  <head>
	<meta charset="utf-8">
	<title> RegisterHere </title>
	
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
	 
	 </style>
	 </head>
  <body>

      <?php
	  include'connection.php';
	  $ret=mysqli_query($con,"select * from trainingdetails where trainingid='".$_GET['trainingid']."'");
	  while($row=mysqli_fetch_array($ret))
	  
	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['trainingname'];?>'s Information</h3>
             	
				<div class="row">
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                           <form class="form-horizontal style-form" name="form1" method="post" action="updateaction.php" onSubmit="return valid();">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">TrainingID </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="trainingid" value="<?php echo $row['trainingid'];?>" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">TrainingName </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="trainingname" value="<?php echo $row['trainingname'];?>" >
                              </div>
                          </div>
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">TrainingType</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="trainingtype" value="<?php echo $row['trainingtype'];?>" >
                              </div>
                          </div>
                               
                                 <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">TrainingDescription</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="trainingdescription" value="<?php echo $row['trainingdescription'];?>" >
                              </div>
                          </div>
                               
                                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">TrainingRequiredAround</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="trainingrequiredaround" value="<?php echo $row['trainingrequiredaround'];?>" >
                              </div>
                          </div>
                               
                                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">ConcernDepartment</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="concerndepartment" value="<?php echo $row['concerndepartment'];?>" >
                              </div>
                          </div>
                               
                                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">TrainingIdentifiedBy</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="trainingidentifiedby" value="<?php echo $row['trainingidentifiedby'];?>" >
                              </div>
                          </div>
                               
                                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">TrainingIdentifiedDate</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="trainingidentifieddate" value="<?php echo $row['trainingidentifieddate'];?>" >
                              </div>
                          </div>
                          
                              
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
      </section></section>
	  <?php } ?>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>