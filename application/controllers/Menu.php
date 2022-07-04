<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model("menu_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu');
        }
    }

    public function add()
    {
        $data['title'] = 'Tambah Daftar Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $menu = $this->menu_model;
        $validation = $this->form_validation;
        $validation->set_rules($menu->rules());

        if ($validation->run() == false) {
        } else {
            $menu->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('menu');

        $data['title'] = 'Edit Daftar menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id' => $id);
        $data['menu'] = $this->menu_model->edit_data($where, 'user_menu')->result_array();

        $menu = $this->menu_model;
        $validation = $this->form_validation;
        $validation->set_rules($menu->rules());

        if ($validation->run() == false) {
        } else {
            $menu->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('menu');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/edit_form', $data);
        $this->load->view('templates/footer');

        $data["menu"] = $menu->getById($id);
        if (!$data["menu"]) show_404();
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->menu_model->delete($id)) {
            redirect(site_url('menu'));
        }
    }
}
