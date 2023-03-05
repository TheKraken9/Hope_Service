<?php

namespace models;

class header_model extends \CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllHeader() {
        $query = $this->db->get('header');
        return $query->result_array();
    }

    public function getSpecifiedHeader($id) {
        $query = $this->db->get_where('header', array('id' => $id));
        return $query->row_array();
    }

    public function createHeader($id, $title, $description) {
        $this->db->insert('header', array('id' => $id, 'title' => $title, 'description' => $description));
    }

    public function updateHeader($id, $title, $description) {
        $this->db->set('title', $title);
        $this->db->set('description', $description);
        $this->db->where('id', $id);
        $this->db->update('header');
    }

    public function deleteHeader($id) {
        $this->db->where('id', $id);
        $this->db->delete('header');
    }
}