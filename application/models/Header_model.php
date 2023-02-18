<?php

namespace models;

class Header_model extends \CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllHeader() {
        $query = $this->db->get('Header');
        return $query->result_array();
    }

    public function getSpecifiedHeader($id) {
        $query = $this->db->get_where('Header', array('id' => $id));
        return $query->row_array();
    }

    public function createHeader($title, $description) {
        $this->db->insert('Header', array('title' => $title, 'description' => $description));
    }

    public function updateHeader($id, $title, $description) {
        $this->db->set('title', $title);
        $this->db->set('description', $description);
        $this->db->where('id', $id);
        $this->db->update('Header');
    }
}