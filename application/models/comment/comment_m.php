<?php

class comment_m extends CI_Model {

    public function get_comments()
    {
        $this->db->select('*');
        $this->db->from('app_comments');
        $this->db->join('app_categories', 'app_categories.category_id = app_comments.category_id');
        // $this->db->join('app_users', 'app_users.user_id = app_comments.user_id');
        $query = $this->db->get();

        return $query->result_array();
        
    }
}