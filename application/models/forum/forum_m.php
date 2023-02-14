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

    public function get_by_id($id = NULL)
    {
        $this->db->select('*');
        $this->db->where('forums_id', $id);
        $this->db->from('app_forums');
        $query = $this->db->get();
        return $query->row_array();  
    }
    public function save($data, $id = NULL){
		// Insert
		if ($id === NULL) {
			$this->db->set($data);
			$this->db->insert('app_forums');
            return TRUE;
		}
		// Update
		else {
			$this->db->set($data);
			$this->db->where('forums_id', $id);
			$this->db->update('app_forums');
            return TRUE;
		}

		return FALSE;
	}

    public function delete($id=NULL)
    {
        $this->db->where('forums_id', $id);
        $this->db->delete('app_forums');
        return TRUE;
    }
}