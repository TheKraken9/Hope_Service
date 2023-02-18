<?php

namespace models;

class About_model extends \CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllAbout() {
        $query = $this->db->get('About');
        return $query->result_array();
    }

    public function getSpecifiedAbout($id) {
        $query = $this->db->get_where('About', array('id' => $id));
        return $query->row_array();
    }

    public function createAbout($id, $title, $description, $idImage) {
        $this->db->insert('About', array('id' => $id, 'title' => $title, 'description' => $description, 'idImage' => $idImage));
    }

    public function updateAbout($id, $title, $description, $idImage) {
        $this->db->set('title', $title);
        $this->db->set('description', $description);
        $this->db->set('idImage', $idImage);
        $this->db->where('id', $id);
        $this->db->update('About');
    }

    public function deleteAbout($id) {
        $this->db->where('id', $id);
        $this->db->delete('About');
    }

}