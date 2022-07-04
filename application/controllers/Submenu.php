<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Submenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model("submenu_model");
        $this->load->library('form_validation');
    }
    // public function submenu()
    // {
    //     $data['title'] = 'Manajemen Sub Menu';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $this->load->model('Menu_model', 'menu');

    //     $data['subMenu'] = $this->menu->getSubMenu();
    //     $data['menu'] = $this->db->get('user_menu')->result_array();

    //     $this->form_validation->set_rules('title', 'Title', 'required');
    //     $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    //     $this->form_validation->set_rules('url', 'URL', 'required');
    //     $this->form_validation->set_rules('icon', 'icon', 'required');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('submenu/list', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $data = [
    //             'title' => $this->input->post('title'),
    //             'menu_id' => $this->input->post('menu_id'),
    //             'url' => $this->input->post('url'),
    //             'icon' => $this->input->post('icon'),
    //             'is_active' => $this->input->post('is_active'),
    //         ];
    //         $this->db->insert('user_sub_menu', $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
    //         redirect('menu/submenu');
    //     }
    // }

    public function index()
    {
        $data['title'] = 'Sub menu manajemen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['submenu'] = $this->db->get('user_sub_menu')->result_array();

        $this->form_validation->set_rules('submenu', 'Submenu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('submenu/list', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_sub_menu', ['submenu' => $this->input->post('submenu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New submenu added!</div>');
            redirect('submenu');
        }
    }

    public function add()
    {
        $data['title'] = 'Tambah Daftar Sub Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $submenu = $this->submenu_model;
        $validation = $this->form_validation;
        $validation->set_rules($submenu->rules());

        if ($validation->run() == false) {
        } else {
            $submenu->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('submenu/new_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('submenu');

        $data['title'] = 'Edit Daftar submenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id' => $id);
        $data['submenu'] = $this->submenu_model->edit_data($where, 'user_sub_menu')->result_array();

        $submenu = $this->submenu_model;
        $validation = $this->form_validation;
        $validation->set_rules($submenu->rules());

        if ($validation->run() == false) {
        } else {
            $submenu->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // redirect('submenu');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('submenu/edit_form', $data);
        $this->load->view('templates/footer');

        $data["submenu"] = $submenu->getById($id);
        if (!$data["submenu"]) show_404();
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->menu_model->delete($id)) {
            redirect(site_url('menu'));
        }
    }
}
