<?php

namespace models;

class Partners_model extends \CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPartners() {
        $query = $this->db->get('Partners');
        return $query->result_array();
    }

    public function getSpecifiedPartners($id) {
        $query = $this->db->get_where('Partners', array('id' => $id));
        return $query->row_array();
    }

    public function createPartners($id, $name, $title, $description, $idImage) {
        $this->db->insert('Partners', array('id' => $id,'name' => $name, 'title' => $title, 'description' => $description, 'idImage' => $idImage));
    }

    public function updatePartners($id, $name, $title, $description, $idImage) {
        $this->db->set('title', $title);
        $this->db->set('name', $name);
        $this->db->set('description', $description);
        $this->db->set('idImage', $idImage);
        $this->db->where('id', $id);
        $this->db->update('Partners');
    }

    public function deletePartners($id) {
        $this->db->where('id', $id);
        $this->db->delete('Contact_us');
    }

    public function historizePartners($id, $name, $title, $description, $idImage) {
        $this->db->insert('historyPartners', array('id' => $id, 'name' => $name, 'title' => $title, 'description' => $description, 'idImage' => $idImage));
    }
}