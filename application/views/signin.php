<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<!--<link rel="stylesheet" href="signin.css" type="text/css"/>-->
</head>
<body background="/W3.jpg">
	<!-- slide code from w3school start-->
	<div align="center">

<div style="max-width:100%; max-height: 350px;" >
  <img class="mySlides" src="/QQ2.jpg" style="width:100%;height: 350px;">
  <img class="mySlides" src="/Q7.jpg" style="width:100%; height: 350px;">
  <img class="mySlides" src="/QQ4.jpg" style="width:100%;height: 350px;">
  <img class="mySlides" src="/QQ6.jpg" style="width:100%;height: 350px;">
  <img class="mySlides" src="/QQ7.jpg" style="width:100%; height: 350px;">
  <img class="mySlides" src="/QQ8.jpg" style="width:100%;height: 350px;">
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
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<!--<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>-->
</div>
<!-- slide code from w3school end -->

<!-- form start -->
<br>
<div align="center">
<form action="http://localhost/p-300/Hello/three" target="_blank" method="Post"><br>
<label style="font-size: 20px;color: black; ">Sign in</label><br><br>
<input type="text" name="Email" placeholder="Email" style="height: 30px; width: 200px; text-align: center;" required="required" /><br>
<input type="text" name="Password" placeholder="Password" style="height: 30px; width: 200px; text-align: center;" required="required"/><br><br>
<input type="submit" value="Sign in" style="background-color:#ffaf1a;border-radius: 10px; height: 40px; width: 100px; font-size: 15px;" /><br>
</form>
<br>
<!-- form end -->
<a href="" style="color:blue;">Forget password?</a>
</div>
</body>
</html>
<!-- <form action="http://localhost/p-300/Hello/three" target="_blank"> -->
