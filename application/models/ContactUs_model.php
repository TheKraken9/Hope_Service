<?php

namespace models;

class ContactUs_model extends \CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllContactUs() {
        $query = $this->db->get('Contact_us');
        return $query->result_array();
    }

    public function getSpecifiedContactUs($id) {
        $query = $this->db->get_where('Contact_us', array('id' => $id));
        return $query->row_array();
    }

    public function createContactUs($id, $title, $description, $idIcon, $message) {
        $this->db->insert('Contact_us', array('id' => $id, 'title' => $title, 'description' => $description, 'idIcon' => $idIcon, 'message' => $message));
    }

    public function deleteContactUs($id) {
        $this->db->where('id', $id);
        $this->db->delete('Contact_us');
    }
}