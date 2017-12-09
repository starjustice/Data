<?php
class Verifylogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->helper('url');
   $this->load->model('User_model');
 }

 function index()
 {
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     $this->load->view('login');
   }

   else {
     redirect('home', 'refresh');
   }
 }

 //  function check_database($password)
 //  {
 //    $username = $this->input->post('username');
 //
 //   $result = $this->user->login($username, $password);
 //   if($result)
 //   {
 //     $sess_array = array();
 //     foreach($result as $row)
 //     {
 //       $sess_array = array(
 //         'Id_staff' => $row->Id_staff,
 //         'Nama_staff' => $row->Nama_staff,
 //         'Posisi' => $row->Posisi
 //       );
 //       $this->session->set_userdata('logged_in', $sess_array);
 //     }
 //     return TRUE;
 //   }
 //   else
 //   {
 //     $this->form_validation->set_message('check_database', 'Invalid username or password');
 //     return false;
 //   }
 // }

    public function validate()
    {
      $Name = $this->input->post('user');
      $Password = $this->input->post('pass');
      if($this->User_model->logindata($Name,$Password))
      {

      }

    }
}
 ?>
