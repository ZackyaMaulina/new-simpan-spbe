<?php

class user_m extends CI_Model {

    public function get_users()
    {
        
        $this->db->select('*');
        $this->db->from('app_users');
        $query = $this->db->get();

        return $query->result_array();
    }

        
    }
