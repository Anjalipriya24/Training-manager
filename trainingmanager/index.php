 <!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <style>
    body {
       margin: 0;
       padding: 0 10px;
       box-sizing: border-box;
       font-family: 'Montserrat', sans-serif;
       background-image:url("1.png");
	   text align: center;
     }
	 h1 {
		 text-align: center;
		 text-decoration:underline;
     text-shadow:1px 1px 2px red, 0 0 1em blue, 0 0 0.2em blue;
	 }
	 .wrapper{
       max-width: 500px;
       width: 100%;
       background-image:url("2.jpg");
       background-position:center;
       margin: 20px auto;
       padding: 30px;
       border: 3px solid green;
       box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
     }
     .wrapper .h1{
       font-size: 24px;
       font-weight: 700;
       margin-bottom: 25px;
       color: #fec107;
       text-transform: uppercase;
       text-align: center;
       text-decoration: underline;
     }
     .wrapper .form{
       width: 100%;
     }
     .wrapper .form .input_field{
       margin-bottom: 15px;
       display: flex;
       align-items: center;
     }
     .wrapper .form .input_field label{
       width: 200px;
       color: #757575;
       margin-right: 10px;
       font-size: 14px;
     }
     .wrapper .form .input_field .input,
     .wrapper .form .input_field .textarea{
       width: 100%;
       outline: none;
       border: 1px solid #d5dbd9;
       font-size: 15px;
       padding: 8px 10px;

     }
     .wrapper .form .input_field .custom_select{
       position: relative;
       width: 100%;
       height: 37px;
     }
     .wrapper .form .input_field .custom_select select{
       -webkit-appearance: none;
       appearance: none;
       border: 1px solid #d5dbd9;
       width: 100%
       height: 100;
       padding: 8px 10px;
       border-radius: 3px;
       outline: none;
     }
     .wrapper .form .input_field .custom_select:before{
       content: "";
       position: absolute;
       top: 10px;
       right: 10px;
       border: 8px solid;
       border-color: transparent transparent transparent transparent;
       pointer-events: none;
     }
     .wrapper .form .input_field .input:focus,
     .wrapper .form .input_field .textarea:focus,
     .wrapper .form .input_field select:focus{
       border: 1px solid  #fec107;
     }
     .wrapper .form .input_field p{
       font-size: 14px;
       color: #757575;
     }
     .wrapper .form .input_field .btn{
       width: 100%;
     }

     </style>
   </head>
    <body>
        
      
	                <div class="wrapper">
					
							 
                            <!-- tname,ttype,tdecpt,trcc,cdpt,tiby,tid,email,password,contactno -->
							<form name="registration" method="post" action="link.php" enctype="multipart/form-data">
							<h1>Training Request</h1>
                            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
								<p>Training Name </p>
								<input type="text" class="text" value=""  name="trainingname" required >
								<p>Training Type </p>
								<input type="text" class="text" value="" name="trainingtype"  required >
                                <p>Training Description </p>
								<input type="text" class="text" value="" name="trainingdescription"  required >
                                <p>Training Required Around </p>
								<input type="date"  value="" name="trainingrequiredaround"  required >
                                <p>Concern Department </p>
								<input type="text" class="text" value="" name="concerndepartment"  required >
                                <p>Training Identified By </p>
								<input type="text" class="text" value="" name="trainingidentifiedby"  required >
                                <p>Training Identified Date </p>
								<input type="date" class="text" value="" name="trainingidentifieddate"  required >
                <input type="date" class="text" value="" name="trainingApprovedddate"  required >
                <input type="text" class="text" value="" name="trainingApprovedBy"  required >


								<div class="input_field">
									<input type="submit" name="submit"  value="Submit" >
									<div class="clear"> </div>
								</div>
							</form>

						</div>
   </body>
     
 </html>