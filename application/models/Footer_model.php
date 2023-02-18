<?php

namespace models;

class Footer_model extends \CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllFooter() {
        $query = $this->db->get('Footer');
        return $query->result_array();
    }

    public function getSpecifiedFooter($id) {
        $query = $this->db->get_where('Footer', array('id' => $id));
        return $query->row_array();
    }

    public function createFooter($id, $title, $description, $idIcon) {
        $this->db->insert('Footer', array('id' => $id, 'title' => $title, 'description' => $description, 'idIcon' => $idIcon));
    }

    public function updateFooter($id, $title, $description, $idIcon) {
        $this->db->set('title', $title);
        $this->db->set('description', $description);
        $this->db->set('idIcon', $idIcon);
        $this->db->where('id', $id);
        $this->db->update('Footer');
    }

    public function deleteFooter($id) {
        $this->db->where('id', $id);
        $this->db->delete('Footer');
    }
}