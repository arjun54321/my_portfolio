<?php
include('connection.php');
?>
<!doctype html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<style>
	 body{
  		   /*background-color:#93B874;*/
          /* background-image:url("project/img/12.jpg");*/
             margin: 0;
             font-family: Arial, Helvetica, sans-serif;
             background-color:;
          }
  .topnav {
             overflow: hidden;
             background-color: #333;
             height:40px;
          }
  .topnav div {
                 color: #f2f2f2;
                 text-align: center;
                 padding: 14px 16px;
                 text-decoration: none;
                 font-size: 30px;
              }
   .card {
             box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
             max-width: 300px;
             margin: auto;
             text-align: center;
             font-family: arial;
         }

  .title {
             color: grey;
             font-size: 18px;
         }

  button {
             border: none;
             outline: 0;
             display: inline-block;
             padding: 8px;
             color: white;
             background-color: #000;
             text-align: center;
             cursor: pointer;
             width: 100%;
             font-size: 18px;
         }

  .symbol a {
         text-decoration: none;
         font-size: 22px;
         color: black;
    }

  button:hover, a:hover {
                             opacity: 0.7;
                        }
  article { 
              display: block;
          }

	</style>
	</head>
	<body>
			<div class="topnav" id="myTopnav">

     		<center><a  href="front.php" class="glyphicon glyphicon-home"  style="padding-left: 30px; color:white;font-size:30px"></a>
                <a  href="home.php" style="padding-left: 30px; color:white">ABOUT ME</a>
                <a  href="education.php" style="padding-left: 30px; color:white">EDUCATION</a>
                <a  href="project.php" style="padding-left: 30px; color:white">PROJECT</a>
                <a  href="skill.php" style="padding-left: 30px; color:white">SKILLS</a>
                <a  href="#" style="padding-left: 30px; color:white">EXPERIENCE</a>
                <a  href="blog.php" style="padding-left: 30px; color:white">BLOG</a>
                <a  href="achievement.php" style="padding-left: 30px; color:white">ACHIEVEMENTS</a>
                <a  href="certificate.php" style="padding-left: 30px; color:white">CERTIFICATE</a>
                <a  href="#" style="padding-left: 30px; color:white" class="gallery">GALLERY</a></center>
			</div>
		<!-- <div class="col-md-12 text-primary"><div style="text-align:center" ><h1>ABOUT ME</h1></div></div> -->
		<div class="row">
			<div class="col-md-5" style="text-align:center">
				<center>
					 <table style="padding: 10px;"> 
			         <tr>
				     <th><h1 class='text-primary'>MY STORY</h1></th>
				     </tr>
				     <?php
				       	   $query="SELECT * FROM aboutme";
                           $data=mysqli_query($con,$query);
                           $total=mysqli_num_rows($data);
			               $result=mysqli_fetch_assoc($data);
			                {
				               echo"<tr><td>".$result['story']."</td></tr>";
			                }
			           ?>
					<!-- <p>its just a demo</p> -->
				    </table>
				</center>
			</div>
		

           <div class="col-md-3 card">
           	<h2 style="text-align:center">ABOUT ME</h2>
                <img src="image/arj2.jpg" alt="arjun" style="width:100%">
                <h1>Arjun Singh</h1>
                <p class="title">Student,B.tech</p>
                <p>Graphic Era University</p>
           <div style="margin: 24px 0;" class="symbol">
                <a href="#"><i class="fa fa-dribbble"></i></a> 
                <a href="#"><i class="fa fa-twitter"></i></a>  
                <a href="#"><i class="fa fa-linkedin"></i></a>  
                <a href="https://www.facebook.com/profile.php?id=100010979738787"><i class="fa fa-facebook"></i></a> 
           </div>
                <p><button onClick="location.href='contact.php'">Contact</button></p>
           </div>

           <div class="col-md-4" >
           	<center>
           		<h1 style="text-align:center" class="text-primary">PERSONAL INFO</h1>
           	<table> 			    
			<?php
			      $query="SELECT * FROM aboutme";
                  $data=mysqli_query($con,$query);
                  $total=mysqli_num_rows($data);
                  $result=mysqli_fetch_assoc($data);
		          {
			         echo"
					      <tr><th style='text-align:center' class='text-primary'>Name:&emsp;&ensp;</th><td style='padding: 20px;'>".$result['name']."</td></tr>
					      <tr><th style='text-align:center' class='text-primary'>Age:&emsp;&ensp;&ensp;</th><td style='padding: 20px;'>".$result['age']."</td></tr>
					      <tr><th style='text-align:center' class='text-primary'>Phone:&emsp;</th><td style='padding: 20px;'>".$result['phone']."</td></tr>
					      <tr><th style='text-align:center' class='text-primary'>Email:&emsp;</th><td style='padding: 20px;'>".$result['email']."</td></tr>
					      <tr><th style='text-align:center' class='text-primary'>Address:</th><td style='padding: 20px;'>".$result['address']."</td></tr>
		  		          ";
           		  }
           		  ?>
           		</table>
           	</center>
           		 <br>
           		  		<div style='text-align:center'>
           		  		 <a href="#" class="btn btn-info btn-lg">
                         <span class="glyphicon glyphicon-search"></span > VIEW RESUME
                         </a >
           		  	</div>
           		  <br><br>
           		  		<div style='text-align:center'>
           		  			<a href="#" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-download"></span> DOWNLOAD RESUME
                            </a>
                        </div> 	
           </div>
       </div>

       <div class="container">

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">hello</h4>
        </div>
        <div class="modal-body">
          <!-- <p><video poster="img/7.jpg" src="movies/1.mp4" controls="controls" width="200" height="200"></p> -->
        </div>
        <div class="modal-footer">
        <!--   <button type="button" class="btn btn-default" data-dismiss="modal" class="close">Close</button> -->
        <button type="button" data-dismiss="modal" class="close">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="container">

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">hello</h4>
        </div>
        <div class="modal-body">
          <!-- <p><video poster="img/7.jpg" src="movies/1.mp4" controls="controls" width="200" height="200"></p> -->
        </div>
        <div class="modal-footer">
        <!--   <button type="button" class="btn btn-default" data-dismiss="modal" class="close">Close</button> -->
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