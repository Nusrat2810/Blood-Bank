<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
   
<link rel="stylesheet" type="text/css" href="/p-300/design/css/Profile.css">
 <link rel="stylesheet" type="text/css" href="/p-300/design/css/design2.css"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body  background="/p-300/design/image/W13.png" style="background-attachment: fixed;background-repeat: no-repeat;">
  <br>
  <ul>
  <li><a href="http://localhost/p-300/Hello/logout" style="text-decoration: none">Logout</a></li>
  <li><a href="http://localhost/p-300/" style="text-decoration: none">Home</a></li>
</ul><br>

  <div class="cont" align="center" style="height: 1000px;">
    <div class="head" style="" >
          <h3>Edit Profile</h3>
        </div>
    
<?php foreach ($profile->result() as $row) { $Num= $row->Number; $id=$row->Id; ?>

    <div class="form">
    	<div  class="alert alert-danger" id="message2">
      </div>
  <form method="POST" id="edit" action="http://localhost/p-300/Hello/edit/<?php echo($row->Id) ;?>">
    <div class="form-group">
    <label style="color: black;">Personal Info</label>
    <fieldset style="color: black;">
    
    <input type="text" name="Name" value="<?php echo($row->Name) ?>"  >

    <input type="text" name="Blood"    value="<?php echo($row->Blood) ?>"  > 
    <select name="Fit"  style="width: 281px; height: 40px;">
    <option value="" disabled selected hidden >Currently fit for donating?</option>
    <option value="Fit" >Fit</option>
    <option value="Unfit">Unfit</option>  
    </select>
  </fieldset>
    <label style="color: black;">Contact Info</label>
    <fieldset>
    <!--<input type="Email" name="Email"  placeholder="Email" required="required">-->
    <input type="text" name="Number"   value="<?php echo($row->Number) ?>" >
    <input type="text" name="District"   value="<?php echo($row->District) ?>" >
    <input type="text" name="Area"   value="<?php echo($row->Area) ?>" >
  </fieldset>
  <label style="color: black;">Password</label>
  <fieldset>
    <input type="password" name="password"   value="<?php echo($row->password) ?>" >
    <input type="password" name="confirm"    value="<?php echo($row->password) ?>" >
  </fieldset>
  </div>
  <div class="bb">
    <br>
     <input  style="background-color: #333333;color: white;" type="submit" value="Save Changes"/>

    </div>
  </form>
   <script>
        $(document).ready(function(){
          $('#edit').submit(function(e){
            e.preventDefault();
            var me2 = $(this);
            $.ajax({
              url: 'http://localhost/p-300/Hello/edit/<?php echo($id) ;?>',
              method: 'POST',
              data: me2.serialize(),
              res2:{Number:Number},
                success: function(res2){
                //where you want to show error message
                //create a div class alert alert-danger top of form and add a id="message"
               if(res2=='00')
               {
                $('#message2').html('<p class="text-danger">All fields required</p>');
               }
               else if(res2=='1')
               {
                $('#message2').html('<p class="text-danger">Number exist</p>');
               }
              else if(res2=='2')
               {
                $('#message2').html('<p class="text-danger">Password does not match</p>');
               }
               else 
               {
                $('#message2').html('<p class="text-danger">Done</p>');
               }
              
              }
            });
          });
        });
      </script> 
</div>
</div>
<?php } ?>


</body>
</html>