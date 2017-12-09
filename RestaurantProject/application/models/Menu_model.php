<?php
	Class Menu_model extends CI_Model
	{
		function __construct()
		{
			parent:: __construct();
		}

		public function getPaketFood()
		{
			$tipe_makanan=1;
			$this->db->select('*');
			$this->db->where('Id_tipe_makanan',$tipe_makanan);
			$query = $this->db->get('menu');
			return $query->result();
		}

		public function getOneFood()
		{
			$tipe_makanan=2;
			$this->db->where('Id_tipe_makanan',$tipe_makanan);
			$query = $this->db->get('menu');
			return $query->result()
		}

		public function getDrink()
		{
			$tipe_makanan=3;
			$this->db->where('Id_ipe_makanan',$tipe_makanan);
			$query = $this->db->get('menu');
		}

		public function addMenu($data)
		{

		}

		public function updateMenu($data)
		{

		}

		public function deleteMenu($id_menu)
		{
			this->db->delete('menu', array('Id_menu'=>$id_menu));
		}
	}
