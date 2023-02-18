<?php

namespace models;

class ContactModel extends \CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllContact() {
        $query = $this->db->get('ContactModel');
        return $query->result_array();
    }

    public function getSpecifiedContact($id) {
        $query = $this->db->get_where('ContactModel', array('id' => $id));
        return $query->row_array();
    }

    public function createContact($id, $title, $description, $idIcon) {
        $this->db->insert('ContactModel', array('id' => $id, 'title' => $title, 'description' => $description, 'idIcon' => $idIcon));
    }

    public function updateContact($id, $title, $description, $idIcon) {
        $this->db->set('title', $title);
        $this->db->set('description', $description);
        $this->db->set('idIcon', $idIcon);
        $this->db->where('id', $id);
        $this->db->update('ContactModel');
    }

    public function deleteContact($id) {
        $this->db->where('id', $id);
        $this->db->delete('ContactModel');
    }
}