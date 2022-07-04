<?php defined('BASEPATH') or exit('No direct script access allowed');

class Submenu_model extends CI_Model
{
    private $_table = "user_sub_menu";

    public $id;
    public $menu_id;
    public $title;
    public $url;
    public $icon;
    public $is_active;

    public function rules()
    {
        return [
            [
                'field' => 'menu_id',
                'label' => 'menu_id',
                'rules' => 'required'
            ],
            [
                'field' => 'title',
                'label' => 'title',
                'rules' => 'required'
            ],
            [
                'field' => 'url',
                'label' => 'url',
                'rules' => 'required'
            ],
            [
                'field' => 'icon',
                'label' => 'icon',
                'rules' => 'required'
            ],
            [
                'field' => 'is_active',
                'label' => 'is_active',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->menu_id = $post["menu_id"];
        $this->title = $post["title"];
        $this->url = $post["url"];
        $this->icon = $post["icon"];
        $this->is_active = $post["is_active"];
        return $this->db->insert($this->_table, $this);
    }

    public function edit_data($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->menu_id = $post["menu_id"];
        $this->title = $post["title"];
        $this->url = $post["url"];
        $this->icon = $post["icon"];
        $this->is_active = $post["is_active"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
