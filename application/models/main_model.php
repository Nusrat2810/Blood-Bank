<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main_model extends CI_Model
{

	public function register($datas)
	{
		$this->db->insert('tb_blood',$datas);
	}


	public function Number_is_taken($Number){

    	$this->db->WHERE('Number',$Number);
		$query = $this->db->get('tb_blood');
		//works as select * from tb_blood where Number = '$Number';
		if($query->num_rows()>0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function can_login($Number,$Password)
	{
		$bn=0;
		$this->db->WHERE('Number',$Number);
		$this->db->WHERE('password',$Password);
		$this->db->WHERE('Banned',$bn);
		$query = $this->db->get('tb_blood');
		//works as select * from tb_blood where Email = '$Email' AND password = '$Password'
		if($query->num_rows()>0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	public function Admin($Number)
	{
		$one=1;
		$this->db->WHERE('Number',$Number);
		$this->db->WHERE('Admin',$one);
		$query = $this->db->get('tb_blood');
		if($query->num_rows()>0)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function get_blood($GBlood,$GDistrict,$GArea,$datas)
	{
		//$this->db->select('*');
		//$this->db->from('tb_blood');
		//$query= $this->db->get();
		//for selecting all
		//insert

		$this->db->insert('tb_blood2',$datas);

		//show
		$GFit='Fit';
		$GBanned=0;
		$this->db->WHERE('Blood',$GBlood);
		$this->db->WHERE('District',$GDistrict);
		$this->db->WHERE('Area',$GArea);
		$this->db->WHERE('Fit',$GFit);
		$this->db->WHERE('Banned',$GBanned);
		$query = $this->db->get('tb_blood');
		return $query;


	}
	public function req()
	{
		$this->db->WHERE('S',0);
		$query= $this->db->get('tb_blood2');
		return $query;
	}
	public function users()
	{
		$this->db->WHERE('Banned',0);
		$query= $this->db->get('tb_blood');
		return $query;
		//select * from tb_blood
	}
	public function busers()
	{
		$this->db->WHERE('Banned',1);
		$query= $this->db->get('tb_blood');
		return $query;
		//select * from tb_blood
	}

	public function make_admin($Id, $data)
	{
		$this->db->where('Id', $Id);
 		 $this->db->update('tb_blood', $data);
		//return $this->db->affected_rows();
	}
	public function bann($Id, $data)
	{
		$this->db->where('Id', $Id);
 		 $this->db->update('tb_blood', $data);
	}
	public function ubann($Id, $data)
	{
		$this->db->where('Id', $Id);
 		 $this->db->update('tb_blood', $data);
	}
	public function profile($Number)
	{
		$this->db->WHERE('Number',$Number);
		$query = $this->db->get('tb_blood');
		return $query;
	}
	public function edit($Id, $data)
	{
		$this->db->where('Id', $Id);
 		 $this->db->update('tb_blood', $data);
	}
	public function give($Id,$data)
	{
		$this->db->where('Id', $Id);
 		 $this->db->update('tb_blood2', $data);
	}

}

