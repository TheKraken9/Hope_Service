<?php

namespace models;

class Events_model extends \CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllEvents() {
        $query = $this->db->get('Events');
        return $query->result_array();
    }

    public function getSpecifiedEvents($id) {
        $query = $this->db->get_where('Events', array('id' => $id));
        return $query->row_array();
    }

    public function createEvents($id, $name, $date, $title, $description, $idImage, $idIcon) {
        $this->db->insert('Events', array('id' => $id, 'name' => $name, 'date' => $date, 'title' => $title, 'description' => $description, 'idImage' => $idImage, 'idIcon' => $idIcon));
    }

    public function updateEvents($id, $name, $date, $title, $description, $idImage, $idIcon) {
        $this->db->set('name', $name);
        $this->db->set('date', $date);
        $this->db->set('title', $title);
        $this->db->set('description', $description);
        $this->db->set('idImage', $idImage);
        $this->db->set('idIcon', $idIcon);
        $this->db->where('id', $id);
        $this->db->update('Events');
    }

    public function deleteEvents($id) {
        $this->db->where('id', $id);
        $this->db->delete('Events');
    }

    public function historizeEvents($id, $name, $date, $title, $description, $idImage, $idIcon) {
        $this->db->insert('historyEvents', array('id' => $id, 'name' => $name, 'date' => $date, 'title' => $title, 'description' => $description, 'idImage' => $idImage, 'idIcon' => $idIcon));
    }
}