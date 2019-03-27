<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Hello extends CI_Controller {
	
	public function index()
	{
		echo "Not Found!";
	}
	



	public function register()
	{
		$data_form = $this->input->post(NULL,TRUE);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Number','Number', 'required' );
		$this->form_validation->set_rules('Blood','Blood', 'required');
		$this->form_validation->set_rules('Fit','Fit', 'required' );
		$this->form_validation->set_rules('District','District', 'required');
		$this->form_validation->set_rules('Area','Area', 'required' );
		$this->form_validation->set_rules('password','password', 'required');
		$this->form_validation->set_rules('confirm','confirm', 'required');
		//if($data_form)
		if($this->form_validation->run())
		{
			$Name = $data_form['Name'];
			$Blood = $data_form['Blood'];
			$Fit = $data_form['Fit'];
			$Number = $data_form['Number'];
			$District = $data_form['District'];
			$Area = $data_form['Area'];
			
			
			$Password = $data_form['password'];
			$Confirm = $data_form['confirm'];

			$this->load->model('main_model');
			$Check=$this->main_model->Number_is_taken($Number);
			$em=0;$ps=0;
			if($Check==TRUE)
			{
				//number exist
				//$em=1;
				echo '1';

			}
			else if($Password != $Confirm)
			{
				//password doesn't match
				echo '2';

			}
			else{
			$datas= array(
			 'Name' => $Name,
			 'Blood' => $Blood,
			 'Fit' => $Fit,

			 'Number' => $Number,
			 'District' => $District,
			 'Area' => $Area,
			 
			 'password' => $Password,
			 'Admin' => '0',
			 'Banned' => '0'
			);

			//$data['Number']=$Number;
			$this->load->model('main_model');
			$this->main_model->register($datas);
			$session_data = array(
					'Number' => $Number,
				);
			$this->session->set_userdata($session_data);
			echo 'ok';
			//redirect('http://localhost/p-300/Hello/enter');
		}
	}

	else
		{
			echo "00";
		}
		
	}
	


	public function login_validation()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('Number','Number', 'required' );
    $this->form_validation->set_rules('password','password', 'required');


    if($this->session->userdata('Number')=='')
    {
    if($this->form_validation->run())
    {
      $rs['res']=0;
      
      $Number=$this->input->post('Number');
      $Password=$this->input->post('password');
      
      $this->load->model('main_model');
      $Ad=$this->main_model->Admin($Number);
      //$Ad==1 if user is admin

      $this->load->model('main_model');
      $Vd=$this->main_model->can_login($Number,$Password);
      //$Vd==true if number password matched
      if($Vd==TRUE)
      {
        $one=1;
        $session_data = array(
          'Number' => $Number,
          'Admin' => $Ad
        );
        $this->session->set_userdata($session_data);
        if($Ad==1)
        {
          //redirect('http://localhost/p-300/Hello/three2');
          //$rs['res']=1;
          //echo $rs['res'] ;
          //echo '1';
          echo 'Admin';
          //redirect('http://localhost/p-300/Hello/three2');

        }
        else{
          
        //redirect('http://localhost/p-300/Hello/enter');
          echo "User";
          //redirect('http://localhost/p-300/Hello/enter');
        }
      }
      else
      { 
        echo '0';
        //echo '<p class="text-danger">Number and Password does not match</p>';
      }
      
    }
    else
    {
      echo "00";
      //echo '<p class="text-danger">All fields required</p>';
    }
  }
  else
  {
    if($this->session->userdata('Admin')==1)
      {
        echo 'Admin';
        //redirect('http://localhost/p-300/Hello/three2/');
      }
      else
      {
        echo "User";
        //redirect('http://localhost/p-300/Hello/enter');
      }
  }

  }




public function enter()
{
	if($this->session->userdata('Number')!='')
	{
		$data['Number']=$this->session->userdata('Number');
		$this->load->view('home', $data);
	}
	else
	{
		//logged out
		redirect('http://localhost/p-300');
	}
}

public function three2()
{
	if($this->session->userdata('Number')!='')
	{
		//$this->session->userdata('Admin')==1
		$data['Number']=$this->session->userdata('Number');
		$this->load->view('home2', $data);
	}
	else
	{
		//logged out
		redirect('http://localhost/p-300');
	}
}

public function logout()
{
	$this->session->unset_userdata('Number');
	redirect('http://localhost/p-300');
	
}

public function get_blood()
{
		if($this->session->userdata('Number')!='')
		{
		$Gdata_form = $this->input->post(NULL,TRUE);
		if($Gdata_form)
		{
		$GBlood = $Gdata_form['Blood'];
		$GDistrict = $Gdata_form['District'];
		$GArea = $Gdata_form['Area'];
		$Number=$this->session->userdata('Number');

		$datas= array(
			 'BG' => $GBlood,
			 'D' => $GDistrict,
			 'A' => $GArea,
			 'S' => 0,
			 'Number' => $Number,
			 

			);
		}

		$this->load->model('main_model');
		$dd['list']=$this->main_model->get_blood($GBlood,$GDistrict,$GArea,$datas);
		$this->load->view('list',$dd);
	}
	else
	{
		//logged out
		redirect('http://localhost/p-300');

	}
	

}

public function req()
{
	$this->load->model('main_model');
	$dp['res']=$this->main_model->req();
	$this->load->view('req',$dp);

}
public function give($Id)
{
	$Number=$this->session->userdata('Number');
	$data['Doner'] = $Number;
	$this->load->model('main_model');
  $this->main_model->give($Id, $data);
  redirect('http://localhost/p-300/Hello/req');
}



public function edit_profile()
{
	if($this->session->userdata('Number')!='')
		{
			$this->load->model('main_model');
			$dd['profile']=$this->main_model->profile($this->session->userdata('Number'));
	$this->load->view('profile',$dd);
	}
	else
	{
		//looged out
		redirect('http://localhost/p-300');
	}
	
}

public function users()
{
	if($this->session->userdata('Number')!='')
		{

	$this->load->model('main_model');
	$data['users']=$this->main_model->users();
	$this->load->view('users',$data);
}
else
{
	//looged out
	redirect('http://localhost/p-300');
}

}


public function four()
{
	if($this->session->userdata('Number')!='')
		{
	$this->load->view('users');
}
else
{
	//looged out
	redirect('http://localhost/p-300');
}

}	
//baki
public function make_admin($Id)
{
	if($this->session->userdata('Number')!='')
		{
	$this->load->model('main_model');
  	$data['Admin'] = 1;
  $this->main_model->make_admin($Id, $data);
  //redirect('http://localhost/p-300/Hello/users');
}
else
{
	//logged out
	redirect('http://localhost/p-300');
}

}
//baki
public function bann($Id)
{
	if($this->session->userdata('Number')!='')
		{
	$this->load->model('main_model');
  	$data['Banned'] = 1;
  $this->main_model->bann($Id, $data);
    redirect('http://localhost/p-300/Hello/users');
}
else
{
	//looged out
	redirect('http://localhost/p-300');
}

}

//baki
public function ubann($Id)
{
	if($this->session->userdata('Number')!='')
		{
	$this->load->model('main_model');
  	$data['Banned'] = 0;
  $this->main_model->ubann($Id, $data);
    redirect('http://localhost/p-300/Hello/Banned');
}
else
{
	//looged out
	redirect('http://localhost/p-300');
}

}

public function banned()
{
	if($this->session->userdata('Number')!='')
		{
			$this->load->model('main_model');
		$data['busers']=$this->main_model->busers();
		$this->load->view('busers',$data);
			
		}
		else
		{
			//logged out
			redirect('http://localhost/p-300');
		}
}
//baki
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
	
		if($this->form_validation->run())
		{
		
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
			
			$Num= $this->session->userdata('Number');
			if($Num!=$Number){
			
			$this->load->model('main_model');
			$Check=$this->main_model->Number_is_taken($Number);
			
			if($Check==TRUE)
			{
				//$em=1;
				echo "1";

			}
		}
			else if($Password != $Confirm)
			{
				//$ps=1;
				echo '2';

			}
			else{
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
			//redirect('http://localhost/p-300/Hello/edit_profile');
			echo 'ok';
		}
	
	}	
		else
		{
			echo "00";
		}

}



public function do_login()
{
	if(isset($_POST['Number']))
	{
		$this->load->model('main_model');
			$Vd=$this->main_model->can_login($Number,$Password);
			if($Vd==TRUE)
			{
				echo 'loggedIn';
				//redirect('http://localhost/p-300/Hello/three2');
			}
			else{
				echo 'No';
			}

	}
}

}


//echo $this->session->userdata('Number');
// have value while logged in