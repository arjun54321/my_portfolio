<?php
include('connection.php');
?>
<!doctype html>
<html>
<head>
	<title>SKILLS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	* {
    box-sizing: border-box;
}
	 body{
             margin: 0;
             font-family: Arial, Helvetica, sans-serif;

          }
         /* .body{
	 	background-size : 100% auto;
	 }*/
	 #myVideo {
    position: absolute;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    z-index: 0;
}

.content {
    position: fixed;
    widows: 100px;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    color:white;
    /*bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;*/
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
	
 *{box-sizing: border-box
 	  width: 300px;
 	}

.box {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding-right: 20px;
  line-height: 40px;
  color: white;
}

.html {width: 90%; background-color: #4CAF50;}
.css {width: 30%; background-color: #2196F3;}
.js {width: 40%; background-color: #f44336;}
.php {width: 50%; background-color: #808080;}
.jquery {width: 30%; background-color: 	#FFFF00;}

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
    background: #fff; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}


</style>
	</head>
	<body class="body" id="body">
		<video autoplay muted loop id="myVideo">
         <source src="video/skill.mp4" type="video/mp4">
         </video>
		<div class="content">
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
                <a  href="#" style="padding-left: 30px; color:white" class="gallery" id="gallery">GALLERY</a></center>
			</div>

			
   <div class="row">
	    <div class="skills" >
	   		<center><h1 class="text-primary" >MY SKILLS</h1></center><hr>
	    </div>
	     <div class="container scrollable">
	   		<div style="padding-right: 30px; font-size:25px">HTML</div><br>
			<div class="box">
			  <div class="skills html">90%</div>
			</div><br>

			<div style="padding-right: 30px; font-size:25px">CSS</div><br>
			<div class="box">
			  <div class="skills css">30%</div>
			</div><br>

			<div style="padding-right: 30px; font-size:25px">JavaScript</div><br>
			<div class="box">
			  <div class="skills js">40%</div>
			</div><br>

			<div style="padding-right: 30px; font-size:25px">PHP</div><br>
			<div class="box">
			  <div class="skills php">50%</div>
			</div><br>

			<div style="padding-right: 30px; font-size:25px">jQuery</div><br>
			<div class="box">
			  <div class="skills jquery">30%</div>
			</div><br>
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
		         <div class="modal-body"></div>		        
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