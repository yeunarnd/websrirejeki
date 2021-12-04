<?php
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
  }

  function index()
  {
    $this->load->view('login_view');
  }

  function auth()
  {
    $email    = $this->input->post('email', TRUE);
    $password = md5($this->input->post('password', TRUE));
    $validate = $this->login_model->validate($email, $password);
    if ($validate->num_rows() > 0) {
      $data  = $validate->row_array();
      $name  = $data['username'];
      $email = $data['email'];
      $level = $data['user_level'];
      $sesdata = array(
        'username'  => $name,
        'email'     => $email,
        'level'     => $level,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($sesdata);
      // access login for admin
      if ($level === '1') {
        redirect('akses');

        // access login for staff
      } elseif ($level === '2') {
        redirect('akses/staff_admin');

        // access login for keuangan
      } elseif ($level === '3') {
        redirect('akses/keuangan');

        // access login for pembina
      } elseif ($level === '4') {
        redirect('akses/pembina');

        // access login for author
      } else {
        redirect('akses/author');
      }
    } else {
      echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
      redirect('login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }
}
