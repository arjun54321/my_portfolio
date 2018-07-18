<?php
include('connection.php');
?>
<!doctype html>
<html>
<head>
	<title>EDUCATION</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<style>
	 body{
             margin: 0;
             font-family: Arial, Helvetica, sans-serif;
          }
          .body{
	 	background-size : 100% auto;
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
	</style>
	<style>
  .row   {
               position: relative;
               width: 60%;
         }

  .image {
             display: block;
             width: 50%;
             height: auto;
}

  .overlay {
                 position: absolute;
                 bottom: 0;
                 left: 100%;
                 right: 0;
                 background-color: #C0392B;
                 overflow: hidden;
                 width: 0;
                 height: 100%;
                 transition: .5s ease;
            }

  .left:hover .overlay {
                           width: 100%;
                           left: 0;
                      }

  .text {
             color: white;
             font-size: 20px;
             position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
             -ms-transform: translate(-50%, -50%);
             white-space: nowrap;
        }

.overlay1 {
			  position: absolute;
			  bottom: 0;
			  left: 0;
			  right: 50%;
			  background-color: #C0392B;
			  overflow: hidden;
			  width: 0;
			  height: 100%;
			  transition: .5s ease;

          }

.right:hover .overlay1 {
                              width: 100%;
                              right: 0;
                       }

.text1 {
 			 color: white;
             font-size: 20px;
             position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
             -ms-transform: translate(-50%, -50%);
             white-space: nowrap;
        }
</style>
	</head>
	<body class="body" id="body" background="pic/arj4.jpg">
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


   <div class="row">
   <div class="education">
   <center><h1 class="text-primary">EDUCATION</h1></center><hr>
   </div>
   <p><h4 class="text-dark" style="padding-left: 50px">Key to success. It helps us build opinions and have points of view on things in life.</h4></p>
   </div><br>

   <div class="container ">
	   <div class="left col-md-3" >
		   <img src="pic/geu.jpg" alt="college" class="image" style="width:100%;height:255px">
		   <div class="overlay">
		   		<div class="text">Hello</div>
		   </div>
	   </div>

	   <div class="right col-md-3">
		   <img src="pic/neis.jpg" alt="college" class="image" style="width:100%;height:255px">
		   <div class="overlay1">
		   		<div class="text1">World</div>
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