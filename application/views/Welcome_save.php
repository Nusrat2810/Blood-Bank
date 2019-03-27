

<!DOCTYPE html>
<html>


<head>
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="design/css/design1.css">
  <!-- form bootstrap from w3 strt-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ideone.com/8uX6Ve.js"></script>
<!--end-->
</head>



<body background="/p-300/design/image/W13.png" style="background-attachment: fixed;background-repeat: no-repeat;">

  <div align="center">
  <br><br><br>
  <!-- welcome heading strt-->
  <div style="background-color:black; opacity: 0.6; height: 150px;">
  <br>
  <h1 style="color: red; font-size: 40px;" >Welcome to BLOOD BANK</h1>
  <p align="center" style="color:white; font-size: 20px;">Please take a step to create account, your contribution can save life</p>
  </div>
  <!-- welcome heading strt-->




  <br><br><br><br>
  <!-- sign in button strt-->
  <p style="color:black; font-size: 20px;">Please Sign In</p>
  <div class="container" >
  <button class="button" data-toggle="modal" data-target="#myModal">Sign In</button>
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" data-backdrop="static">
    <div >
      <!-- Modal content-->
      <!-- Form design strt-->
      
        <div >
<div  class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div style="background-color: white;" class="inner-container">
    <div class="modal-header" style="background-color: DarkOrange;color: white;" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Sign In</h3>
        </div>
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>

    <!-- Form strt-->
    <div class="box">
      <form action="http://localhost/p-300/Hello/login_validation" method="Post"  />
      <input name="Number" type="text" placeholder="Phone Number (Ex: +880..)" />
     <span><?php// echo form_error('Number');?></span>
      <input name="password" type="text" placeholder="password" />
      <span><?php// echo form_error('password');?></span>
      <input style="background-color: #333333;color: white;" type="submit" name="insert" value="Sign In"/>
      <?php
      //echo '<label>'.$this->session->flashdata("error").'</label>';
      ?>
  </form>
  
  <br>
      <a href=""><span>Forget Password?</span></a>
    </div>
    <!-- Form end-->

  </div>
</div>
   </div>
    <!-- Form design end-->
        
      
      
    </div>
  </div>
  <!--ghjklkjhgf-->
</div>
<!-- sign in button end-->




<!-- sign up button strt-->
  <br><br><br>
  <p style="color:black; font-size: 20px;" >Don't have account? Register Now</p>
  <div class="container" >
  <button class="button" data-toggle="modal" data-target="#myModal2">Sign Up</button>
   <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div >
      <!-- Modal content-->
       <!-- Form design strt-->

        <div >
<div  class="vid-container1" >
  <video id="Video1" class="bgvid1 back1" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div style="background-color: white;" class="inner-container1">
    <div class="modal-header" style="background-color: DarkOrange;color: white;" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Sign Up</h3>
        </div>
    <video id="Video2" class="bgvid1 inner1" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>

    <!-- Form strt-->
    <div class="box1">
      <!-- sign up form strt-->
<form method="POST" action="http://localhost/p-300/Hello/register">
    <div class="form-group">
    <label style="color: black;">Personal Info</label>
    <fieldset style="color: black;">
    
    <input type="text" name="Name" placeholder="Full Name"  >
    <!--<select name="Gender" required="required" style="width: 300px; height: 40px;">
    <option value="" disabled selected hidden >Gender</option>
    <option value="Male" >Male</option>
    <option value="Female">Female</option>  
    </select>
    <input type="Number" name="Age"    placeholder="Age" required="required">-->

    <input type="text" name="Blood"    placeholder="Blood Group (Ex: AB-)" required="required" >  
    <select name="Fit" required="required" style="width: 300px; height: 40px;">
    <option value="" disabled selected hidden >Currently fit for donating?</option>
    <option value="Fit" >Fit</option>
    <option value="Unfit">Unfit</option>  
    </select>
  </fieldset>
    <label style="color: black;">Contact Info</label>
    <fieldset>
    <!--<input type="Email" name="Email"  placeholder="Email" required="required">-->
    <input type="text" name="Number"   placeholder="Phone Number (Ex: +880..)" required="required">
    <input type="text" name="District"   placeholder="District (Ex: Sylhet)" required="required">
    <input type="text" name="Area"   placeholder="Area (Ex: Chowhatta)" required="required">
  </fieldset>
  <label style="color: black;">Password</label>
  <fieldset>
    <input type="password" name="password"   placeholder="Password" required="required">
    <input type="password" name="confirm"    placeholder="Confirm Password" required="required">
  </fieldset>
  </div>
  <div class="bb">
    <br>
     <input  style="background-color: #333333;color: white;" type="submit" value="Sign Up"/>
    </div>
  </form>
  <!-- sign up form end-->
    </div>
    <!-- Form end-->

  </div>
</div>
     </div>
      <!-- Form design end-->

        
      
    </div>
  </div>
  <!--ghjklkjhgf-->
</div>
<!-- sign Up button end-->
  <br>
</div>
</body>
<br><br>
<footer style="font-size: 20px; margin-top: 50px; margin-bottom: 25px; margin-left: 10px; color: white; background-color: black; opacity: 0.5;">
  For any query contact +8801622496003
</footer>
</html>
