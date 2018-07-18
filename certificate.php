<?php
include('connection.php');
$query="SELECT * FROM certificate";
$data=mysqli_query($con,$query);
?>
<!doctype html>
<html>
<head>
	<title>CERTIFICATE</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<style>
	body{
             margin: 0;
             font-family: Arial, Helvetica, sans-serif;
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
    .overlay {
    	position:absolute;
    	left:0px;
    	top:0px;
    	width:100%;
    	height:100%;
    	background-color:rgb(0, 0, 0, 1);
    }

    .myImage {
    	position: relative;
    	width:80%;
    	height:80%;
    	top:10%;
    	/*background-color: #fff;*/
    	margin: auto;
    }	
	</style>
  <style>
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

			<div class="row">
              <div class="certificate">
                 <center><h1 class="text-primary">CERTIFICATES</h1></center><hr>
              </div>
            </div> 

            <div class="container">
		        <?php 
				       while($result=mysqli_fetch_assoc($data))
		               {
                           $i=$result['name'];

                           echo"<div class='col-md-3'><img class='zoomImage' src='pic/".$i.".jpg' width='250' height='250'>
                               </div>";
                        } 	
                ?>

            <div class="overlay" style="display:none">
            	<div class="myImage" style="text-align: center;"></div>
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
	<script type="text/javascript">
		$('.zoomImage').click(function(){
			// var url = $(this)["0"].currentSrc;
			var url = $(this).attr('src');
			var img = '<img style="height:100%;width:auto" src="'+url+'">';
			$('.myImage').html(img);
			$('.overlay').css('display','block');
			console.log(img);
		});
		$('.overlay').click(function(){
			$(this).css('display','none');
		});



	// function displayData(id){
	// 	var name = $('#name').val();
	// 	//console.log(id);
	// 			$.ajax({
	// 				type:'POST',
	// 				url:'certificate1.php',
	// 				data:{'id':id,'name':name,},
	// 				success:function(display){
	// 					console.log(display);
	// 					$("#display").html(display);
	// 					//alert("hello");
	// 					//console.log("hello");
	// 				}
	// 			});

	// 	}

</script>

	</body>
</html>