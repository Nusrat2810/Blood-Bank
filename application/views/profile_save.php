<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
   
<link rel="stylesheet" type="text/css" href="/p-300/design/css/Profile.css">
 <link rel="stylesheet" type="text/css" href="/p-300/design/css/design2.css"/>

</head>
<body  background="/p-300/design/image/W13.png" style="background-attachment: fixed;background-repeat: no-repeat;">
  <br>
  <ul>
  <li><a href="http://localhost/p-300/Hello/logout" style="text-decoration: none">Logout</a></li>
  <li><a href="http://localhost/p-300/" style="text-decoration: none">Home</a></li>
</ul><br>

  <div class="cont" align="center">
    <div class="head" style="" >
          <h3>Edit Profile</h3>
        </div>
    
<?php foreach ($profile->result() as $row) { $Num= $row->Number;  ?>

    <div class="form">
      <div  class="alert alert-danger" id="message2">
      </div>
  <form method="POST" action="http://localhost/p-300/Hello/edit/<?php echo($row->Id) ;?>">
    <div class="form-group">
    <label style="color: black;">Personal Info</label>
    <fieldset style="color: black;">
    
    <input type="text" name="Name" value="<?php echo($row->Name) ?>"  >

    <input type="text" name="Blood"    value="<?php echo($row->Blood) ?>" required="required" > 
    <select name="Fit" required="required" style="width: 300px; height: 40px;">
    <option value="" disabled selected hidden >Currently fit for donating?</option>
    <option value="Fit" >Fit</option>
    <option value="Unfit">Unfit</option>  
    </select>
  </fieldset>
    <label style="color: black;">Contact Info</label>
    <fieldset>
    <!--<input type="Email" name="Email"  placeholder="Email" required="required">-->
    <input type="text" name="Number"   value="<?php echo($row->Number) ?>" required="required">
    <input type="text" name="District"   value="<?php echo($row->District) ?>" required="required">
    <input type="text" name="Area"   value="<?php echo($row->Area) ?>" required="required">
  </fieldset>
  <label style="color: black;">Password</label>
  <fieldset>
    <input type="password" name="password"   value="<?php echo($row->password) ?>" required="required">
    <input type="password" name="confirm"    value="<?php echo($row->password) ?>" required="required">
  </fieldset>
  </div>
  <div class="bb">
    <br>
     <input  style="background-color: #333333;color: white;" type="submit" value="Save Changes"/>
    </div>
  </form>
</div>
</div>
<?php } ?>


</body>
</html>




///cont



public function edit($Id)
{
    $data_form2 = $this->input->post(NULL,TRUE);
    $this->load->library('form_validation');

    $this->form_validation->set_rules('Number','Number', 'required' );
    $this->form_validation->set_rules('Blood','Blood', 'required');
    $this->form_validation->set_rules('Fit','Fit', 'required' );
    $this->form_validation->set_rules('District','District', 'required');
    $this->form_validation->set_rules('Area','Area', 'required' );
    $this->form_validation->set_rules('password','password', 'required');
    $this->form_validation->set_rules('confirm','confirm', 'required');

    if($this->form_validation->run()){

    
    
      $Name = $data_form2['Name'];
      $Blood = $data_form2['Blood'];
      $Fit = $data_form2['Fit'];
      $Number = $data_form2['Number'];
      $District = $data_form2['District'];
      $Area = $data_form2['Area'];
      
      
      $Password = $data_form2['password'];
      $Confirm = $data_form2['confirm'];

      $this->load->model('main_model');
      $Ad=$this->main_model->Admin($Number);
      $one=0;
      if($Ad==TRUE){
      $Admin = 1;
      $one=1;
    }
    else{
      $Admin=0;
    }
      
      $em=0;$ps=0;

      $Num= $this->session->userdata('Number');
      if($Num!=$Number){
      
      $this->load->model('main_model');
      $Check=$this->main_model->Number_is_taken($Number);
      
      if($Check==TRUE)
      {
        $em=1;

      }
      if($Password != $Confirm)
      {
        $ps=1;

      }
    }
      if($em==0 && $ps==0){
      $datas= array(
       'Name' => $Name,
       'Blood' => $Blood,
       'Fit' => $Fit,

       'Number' => $Number,
       'District' => $District,
       'Area' => $Area,
       
       'password' => $Password,
       'Admin' => $one,
       'Banned' => '0'
      );
      $this->load->model('main_model');
      $this->main_model->edit($Id,$datas);
      $this->session->unset_userdata('Number');
      $session_data = array(
          'Number' => $Number,
          'Admin' => $one

        );
      $this->session->set_userdata($session_data);
      redirect('http://localhost/p-300/Hello/edit_profile');
    }
  }
  
    
    else
    {
      echo "gese na";
    }

}