<?php

class article_m extends CI_Model {

    public function get_articles($limit = 0)
    {

        $this->db->select('*');
        $this->db->from('app_articles');
        $this->db->join('app_categories', 'app_categories.category_id = app_articles.category_id');
        $this->db->join('app_users', 'app_users.user_id = app_articles.user_id');

        if ($limit > 0) {
            $this->db->limit($limit);
        }

        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_by_id($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('app_articles');
        $this->db->join('app_categories', 'app_categories.category_id = app_articles.category_id');
        $this->db->join('app_users', 'app_users.user_id = app_articles.user_id');
        $this->db->where('article_id', $id);
        $query = $this->db->get();
        return $query->row_array();  
    }

	public function save($data, $id = NULL){
		// Insert
		if ($id === NULL) {
			$this->db->set($data);
			$this->db->insert('app_articles');
            return TRUE;
		}
		// Update
		else {
			$this->db->set($data);
			$this->db->where('article_id', $id);
			$this->db->update('app_articles');
            return TRUE;
		}

		return FALSE;
	}

    public function delete($id=NULL)
    {
        $this->db->where('article_id', $id);
        $this->db->delete('app_articles');
        return TRUE;
    }

    
}

