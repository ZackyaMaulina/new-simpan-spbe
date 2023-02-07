<?php

class article_m extends CI_Model {

    public function get_articles()
    {

        $this->db->select('*');
        $this->db->from('app_articles');
        $this->db->join('app_categories', 'app_categories.category_id = app_articles.category_id');
        $this->db->join('app_users', 'app_users.user_id = app_articles.user_id');
        $query = $this->db->get();

        return $query->result_array();
    }
}