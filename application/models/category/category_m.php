<?php

class category_m extends CI_Model
{

    public function get_categories()
    {
        $this->db->select('*');
        $this->db->from('app_categories');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function save($data, $id = NULL)
    {
        if ($id === NULL) {
            $this->db->set($data);
            $this->db->insert('app_categories');
            return TRUE;
        }

        else {
            $this->db->set($data);
            $this->db->where('category_id', $id);
            $this->db->update('app_categories');
            return TRUE;
        }

        return FALSE;
    }

    public function delete($id = NULL)
    {
        $this->db->where('category_id', $id);
        $this->db->delete('app_categories');
        return TRUE;
    }

    
}