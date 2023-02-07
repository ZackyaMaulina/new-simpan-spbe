<?php

class forum_m extends CI_Model {

    public function get_forums()
    {
        $this->db->select('*');
        $this->db->from('app_forums');
        $this->db->join('app_categories', 'app_categories.category_id = app_forums.category_id');
        $this->db->join('app_users', 'app_users.user_id = app_forums.user_id');
        $query = $this->db->get();

        return $query->result_array();
    }
}