<?php

namespace models;

use CI_Model;

class Service_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllService() {
        $query = $this->db->get('Service');
        return $query->result_array();
    }

    public function getSpecifiedService($id) {
        $query = $this->db->get_where('Service', array('id' => $id));
        return $query->row_array();
    }

    public function createService($id, $name, $title, $description, $idImage, $idIcon) {
        $this->db->insert('Service', array('id' => $id, 'name' => $name, 'title' => $title, 'description' => $description, 'idImage' => $idImage, 'idIcon' => $idIcon));
    }

    public function updateService($id, $name, $title, $description, $idImage, $idIcon) {
        $this->db->set('name', $name);
        $this->db->set('title', $title);
        $this->db->set('description', $description);
        $this->db->set('idImage', $idImage);
        $this->db->set('idIcon', $idIcon);
        $this->db->where('id', $id);
        $this->db->update('Service');
    }

    public function deleteService($id) {
        $this->db->where('id', $id);
        $this->db->delete('Service');
    }

    public function historizeService($id, $name, $title, $description, $idImage, $idIcon) {
        $this->db->insert('historyService', array('id' => $id, 'name' => $name, 'title' => $title, 'description' => $description, 'idImage' => $idImage, 'idIcon' => $idIcon));
    }
}