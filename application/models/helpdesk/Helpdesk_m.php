<?php

class helpdesk_m extends CI_Model
{

    public function save($data, $id = NULL)
    {
        // Insert
        if ($id === NULL) {
            $this->db->set($data);
            $this->db->insert('app_helpdesk');
            return TRUE;
        }
        // Update
        else {
            $this->db->set($data);
            $this->db->where('helpdesk_id', $id);
            $this->db->update('app_helpdesk');
            return TRUE;
        }

        return FALSE;
    }

    public function delete($id = NULL)
    {
        $this->db->where('helpdesk_id', $id);
        $this->db->delete('app_helpdesk');
        return TRUE;
    }


    public function get_helpdesks($limit = 0)
    {

        $this->db->select('*');
        $this->db->from('app_helpdesk');

        if ($limit > 0) {
            $this->db->limit($limit);
        }

        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_by_id($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('app_helpdesk');
        $this->db->where('helpdesk_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

}