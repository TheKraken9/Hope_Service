<?php

namespace models;

use CI_Model;

class Team_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllTeam() {
        $query = $this->db->get('Team');
        return $query->result_array();
    }

    public function getSpecifiedTeam($id) {
        $query = $this->db->get_where('Team', array('id' => $id));
        return $query->row_array();
    }

    public function createTeam($id, $name, $title, $description, $idImage) {
        $this->db->insert('Team', array('id' => $id, 'name' => $name, 'title' => $title, 'description' => $description, 'idImage' => $idImage));
    }

    public function updateTeam($id, $name, $title, $description, $idImage) {
        $this->db->set('name', $name);
        $this->db->set('title', $title);
        $this->db->set('description', $description);
        $this->db->set('idImage', $idImage);
        $this->db->where('id', $id);
        $this->db->update('Team');
    }

    public function deleteTeam($id) {
        $this->db->where('id', $id);
        $this->db->delete('Team');
    }

    public function historizeTeam($id, $name, $title, $description, $idImage) {
        $this->db->insert('historyTeam', array('id' => $id, 'name' => $name, 'title' => $title, 'description' => $description, 'idImage' => $idImage));
    }
}