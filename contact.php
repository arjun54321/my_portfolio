<?php
include('connection.php');
?>
<!doctype html>
<html>
<head>
	<title>FORM</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<style>
		  body{
	             margin: 0;
	             font-family: Arial, Helvetica, sans-serif;
	             background-color:#ADD8E6;
	          }
	     .body{
	        	background-size : 100% auto;
	          }
	  .topnav {
	             overflow: hidden;
	             background-color: #333;
	             height:40px;
	          }
	  .topnav 
	      div {
	                 color: #f2f2f2;
	                 text-align: center;
	                 padding: 14px 16px;
	                 text-decoration: none;
	                 font-size: 30px;
	          }
	  .scrollable{
	                 height: 500px;overflow-y: scroll;
                 }

/* width */
::-webkit-scrollbar {
    width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
    background: transparent; 
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #000000; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}

	</style>
</head>
	<body class="body" id="body" background="">
		<div class="topnav" id="myTopnav">
		    <center>
			    <a  href="front.php" class="glyphicon glyphicon-home"  style="padding-left: 30px; color:white;font-size:30px"></a>
			    <a  href="home.php" style="padding-left: 30px; color:white">ABOUT ME</a>
                <a  href="education.php" style="padding-left: 30px; color:white">EDUCATION</a>
                <a  href="project.php" style="padding-left: 30px; color:white">PROJECT</a>
                <a  href="skill.php" style="padding-left: 30px; color:white">SKILLS</a>
                <a  href="#" style="padding-left: 30px; color:white">EXPERIENCE</a>
                <a  href="blog.php" style="padding-left: 30px; color:white">BLOG</a>
                <a  href="achievement.php" style="padding-left: 30px; color:white">ACHIEVEMENTS</a>
                <a  href="certificate.php" style="padding-left: 30px; color:white">CERTIFICATE</a>
                <a  href="#" style="padding-left: 30px; color:white" class="gallery">GALLERY</a>
            </center>
		</div>
		<div class="row">
		     <div class="education">
				   <center>
				   	     <h1 class="text-primary">PLEASE FILL THE FORM</h1>
				   </center><hr>
		     </div>

		     <div class="container">
			     <form action="" method="POST" id="demo">
			     	<div class="row">
				     	<div class="col-md-8 col-md-offset-4 text-primary">
				     		<h4>Name:</h4><br>
				     		<input type="text" name="name" value="" id="name" size="48" style="border-color:green">  		
				     	</div>
				    </div>
				    <br>
				    <div class="row"> 	
				     	<div class="col-md-8 col-md-offset-4 text-primary" >
				     		<h4>Phone no:</h4><br>
				     		<input type="text" name="mobile" value="" id="mobile" size="48" style="border-color:green">
				     	</div>
				    </div>
				    <br>
				    <div class="row">
				     	<div class="col-md-8 col-md-offset-4 text-primary">
				     		<h4>Email:</h4><br>
				     		<input type="email" name="email" value="" id="email" size="48" style="border-color:green">
				     	</div>
				    </div>
				    <br>
				     <div class="row">
				     	<div class="col-md-8 col-md-offset-4 text-primary">
				     		<h4>Message:</h4><br>
				     		<textarea rows="4" cols="50" name="message" style="border: 2px solid green;">
                            </textarea>
				     	</div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-md-8 col-md-offset-4 text-success">
				    		<input type="submit" name="submit" id="submit" value="submit" style="border-color:green">
				    	</div>
				    </div>
			     </form>	    
		     </div>

		     <?php
		       if($_POST['submit'])
		       {    
		           	$name=$_POST['name'];

		       		$email=$_POST['email'];
		       	
		       		$mobile=$_POST['mobile'];

		       		$message=$_POST['message'];

		       		if($name!=""&&$email!=""&&$mobile!=""&&$message!="")
		       		{	
		       		
		       			$query="INSERT INTO CONTACT (name,email,mobile,message) VALUES('$name','$email','$mobile','$message')";
		       			$data=mysqli_query($con,$query);
		       			if($data)
		       			{
		       				echo"data inserted successfully";
		       			}
		       			else
		       			{
		       				echo"not inserted";
		       			}

		       		}
		       		else
		       		{
		       			echo "there must be an empty data field";
		       		}
		       }
		       ?>

			 <div class="container">
				  <div class="modal fade" id="myModal" role="dialog">
				    <div class="modal-dialog">				    
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">hello</h4>
				        </div>
				        <div class="modal-body">
				        </div>
				        <div class="modal-footer">
				            <button type="button" data-dismiss="modal" class="close">Close</button>
				        </div>
				      </div>				      
				    </div>
				  </div>
			 </div>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
                $(document).ready(function (){
                   $('.gallery').click(function(){

        var btn = "<center><button class='btn btn-primary btnAppear1' style='width:200px'>PICTURE GALLERY</button> <button class='btn btn-primary btnAppear2' style='width:200px'>VIDEO GALLERY</button></center>";
        $('.modal-title').html('Select Gallery');
        $('.modal-body').html(btn);
        $('#myModal').modal('toggle');
        $('.btnAppear1').click(function(){

              window.location.assign("pic.php")
          })
        $('.btnAppear2').click(function(){

              window.location.assign("video.php")
          })

      });
    });
</script>
	</body>
</html>
