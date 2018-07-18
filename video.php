<?php
include('connection.php');
error_reporting(1);
$query="SELECT * FROM VIDEO";
$data=mysqli_query($con,$query);
	?>

		<!DOCTYPE html>
<html lang="en">
<head>
  <title>video</title>
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

.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    text-align:center;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width:auto;
    height:auto;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
   /* left:50%;
    margin-right: -80px;*/
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
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
    <center><h1 class="text-primary">VIDEOS</h1></center><hr>
  </div>
  </div><br>
  <div class="container">
    <?php $qwerty=0;
				while($result=mysqli_fetch_assoc($data))
		{
      $i=$result['name'];
      $j=$result['image'];
      $k=$result['title'];
      $l=$result['description'];

                    echo"<div class='col-md-2' ><img  title='".$l."'  src='pic/".$j.".jpg' data-poster='pic/".$j.".jpg' data-title='".$k."' data-url='video/".$i.".mp4' width='150' height='150' class='moviePoster'>
                      <div class='popup' onclick='myFunction(".$qwerty.")' style='padding-left: 50px; font-size:15px;color:blue'>".$result['title']."
                       <span class='popuptext' id='myPopup".$qwerty."'>".$l."'</span></div>
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
    $(document).ready(function(){
      $('.moviePoster').click(function(){
        var title = $(this).data('title');
        var url = $(this).data('url');
        var poster = $(this).data('poster');
        var video = '<video poster="'+poster+'" src="'+url+'" controls="controls" width="100%" height="auto">';

        $('.modal-title').html(title);
        $('.modal-body').html(video);
        $('#myModal').modal('toggle');
      });
    });
    
   </script>

<script>
$(function(){
    $('.close').click(function(){      
      $("video").each(function() { 
        var src= $(this).attr('src');
        $(this).attr('src',src);  
      });
    });
});
</script>

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

<script>
function myFunction(id) {
    var popup = document.getElementById("myPopup"+id);
    popup.classList.toggle("show");
}
</script>
</body>
</html>