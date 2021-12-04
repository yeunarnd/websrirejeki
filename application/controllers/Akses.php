<?php
class Akses extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
    }
  }

  function index()
  {
    //Allowing akses to admin only
    if ($this->session->userdata('level') === '1') {
      $this->load->view('admin/dashboard');
    } else {
      echo "Access Denied";
    }
  }

  function staff_admin()
  {
    //Allowing akses to staff only
    if ($this->session->userdata('level') === '2') {
      $this->load->view('staff/dashboard');
    } else {
      echo "Access Denied";
    }
  }

  function keuangan()
  {
    //Allowing akses to staff only
    if ($this->session->userdata('level') === '3') {
      $this->load->view('keuangan/dashboard');
    } else {
      echo "Access Denied";
    }
  }

  function pembina()
  {
    //Allowing akses to staff only
    if ($this->session->userdata('level') === '4') {
      $this->load->view('pembina/dashboard');
    } else {
      echo "Access Denied";
    }
  }

  function author()
  {
    //Allowing akses to author only
    if ($this->session->userdata('level') === '5') {
      $this->load->view('author/dashboard');
    } else {
      echo "Access Denied";
    }
  }
}
