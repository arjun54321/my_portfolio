<?php
include('connection.php');
$query="SELECT * FROM image";
$data=mysqli_query($con,$query);
?>
<!doctype html>
<html>
<head>
	<title>picture</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<style>
	body{
  		   /*background-color:#93B874;*/
           background-image:url("pic/arj3.jpg");
             margin: 0;
             font-family: Arial, Helvetica, sans-serif;
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
.zoom {
    padding: 50px;
    margin: 0 auto;
     overflow:hidden;
       width:500px;
    height:400px;
}

.zoom:hover img {
	transition: transform 2.0s;
    -ms-transform: scale(1.5);
    -webkit-transform: scale(1.5);
    transform: scale(1.5);  
    width:500px;
    height:400px;

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
			
			 <div class="row">
  <div class="movie">
    <center><h1 class="text-primary">PICTURES</h1></center><hr>
  </div>
  </div><br>
  <div class="container">
		<?php $qwerty=0;
				while($result=mysqli_fetch_assoc($data))
		{
      $i=$result['image'];
      $j=$result['title'];
      $k=$result['description'];

                    echo"<div class='col-md-2 zoom' ><img src='pic/".$i.".jpg' width='150' height='150'  title='".$k."' onclick=myFunction(".$qwerty.")'>
                    	<div style='padding-left: 50px; font-size:15px;color:blue'>".$result['title']."</div>
                       </div>";
                       $qwerty++;
           } 	
?>
</div>

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