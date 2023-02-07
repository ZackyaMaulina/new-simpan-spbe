<?php

class category_m extends CI_Model {

    public function get_categories()
    {

        $this->db->select('*');
        $this->db->from('app_categories');
        $query = $this->db->get();

        return $query->result_array();
        
    }
}