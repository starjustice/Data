<?php
Class User_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	function validate()
	{
		$this->db->where('Nama_staff', $this->input->post('nama_staff'));
		$this->db->where('Password',md5($this->input->post('password')));
		$query = $this->db->get('staff');

		if($query->num_rows ==1)
		{
			return true;
		}
	}

	function logindata($nama_staff,$passsword)
	{
		$this->db->where('Nama_staff',$nama_staff);
		$this->db->where('Password',$passsword);
		$query = $this->db->get('staff');

		if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
	}

	function create_member()
	{
		$new_member_insert = array(
				'Nama_staff' =>
			)

			$insert = $this->db->insert('staff',$new_member_insert);
			return $insert
	}
}

?>
