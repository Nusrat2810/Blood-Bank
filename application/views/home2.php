<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
  <link rel="stylesheet" type="text/css" href="/p-300/design/css/design2.css"/>
<link rel="stylesheet" href="/p-300/design/css/slide.css">
  <!-- form bootstrap from w3 strt-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ideone.com/8uX6Ve.js"></script>
<!--end-->
</head>
<body background="/p-300/design/image/W13.png"  style="background-attachment: fixed;background-repeat: no-repeat;">
  <br>
 <div>
  <ul>
	<li><a href="http://localhost/p-300/Hello/logout" style="text-decoration: none">Logout</a></li>
	<li><a href="http://localhost/p-300/Hello/edit_profile" style="text-decoration: none">Edit profile</a></li>
	<li><a href="http://localhost/p-300/Hello/users" style="text-decoration: none">Users</a></li>
  <li><a href="http://localhost/p-300/Hello/req" style="text-decoration: none">Requests</a></li> 
  <li style="float: left; color: white; padding: 10px; font-size: 25px;">Welcome <?php echo '('.$Number.')'; ?></li>
  <!--getblood strt-->
  <li><a style="text-decoration: none" data-toggle="modal" data-target="#myModal">Get Blood</a></li>
  <div class="container">
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div >
      <!-- Modal content-->
      <!-- Form design strt-->
        <div >
<div  class="vid-container2">
  <video id="Video1" class="bgvid2 back2" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div style="background-color: white;" class="inner-container2">
    <div class="modal-header" style="background-color: DarkOrange;color: white;" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 align="center">Fill Up Your Requirements</h3>
        </div>
    <video id="Video2" class="bgvid2 inner2" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <!-- Form strt-->
    <div class="box2">
      <form action="http://localhost/p-300/Hello/get_blood" method="Post">
        <br>
      <input type="text" name="Blood" placeholder="Blood Group (Ex: AB-)" required="required" />
      <input type="text" name="District" placeholder="District (Ex: Sylhet)" required="required" />
      <input type="text" name="Area" placeholder="Area (Ex: Chowhatta)" required="required" />
      <!--<input type="text" name="NAddress" placeholder="Area" required="required" />-->
      <br>
      <input style="background-color: #333333;color: white;" type="submit" value="Submit"/>
  </form>
    </div>
    <!-- Form end-->
  </div>
</div>
   </div>
    <!-- Form design end-->  
    </div>
  </div>
</div>
<!--getblood end-->
</ul>
</div>
<br>
<p style="font-size: 20px;" align="center">Hello Admin!!!</p>
<p style="font-size: 20px;" align="center">Don't Forget To Update Your Profile After Donating (Fit Section) !!!</p>
<br><br>
<div class="w3-content w3-section" >

  <img  class=" mySlides w3-animate-fading" src="/p-300/design/image/Q3.png" style="height: 400px;width: 100%;">
  <img  class=" mySlides w3-animate-fading" src="/p-300/design/image/QQ2.jpg" style="height: 400px;width: 100%;" >
  <img  class=" mySlides w3-animate-fading" src="/p-300/design/image/Q7.jpg" style="height: 400px;width: 100%;">
  <img  class=" mySlides w3-animate-fading" src="/p-300/design/image/QQ4.jpg" style="height: 400px;width: 100%;">
  <img  class=" mySlides w3-animate-fading" src="/p-300/design/image/QQ6.jpg" style="height: 400px;width: 100%;">
  <img  class=" mySlides w3-animate-fading" src="/p-300/design/image/QQ3.png" style="height: 400px;width: 100%;">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}
</script>
</body>
<footer style="font-size: 20px; margin-top: 50px; margin-bottom: 25px; margin-left: 10px; color: white; background-color: black; opacity: 0.5;">
  For any query contact +8801622496003
</footer>
</html>