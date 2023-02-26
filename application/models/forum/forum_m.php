<?php

class forum_m extends CI_Model
{

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
        $this->db->where('forum_id', $id);
        $this->db->from('app_forums');
        $this->db->join('app_categories', 'app_categories.category_id = app_forums.category_id');
        $this->db->join('app_users', 'app_users.user_id = app_forums.user_id');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_by_type($type = NULL)
    {
        $this->db->select('*');
        $this->db->from('app_forums');
        $this->db->join('app_categories', 'app_categories.category_id = app_forums.category_id');
        $this->db->join('app_users', 'app_users.user_id = app_forums.user_id');

        if ($type !== NULL) {

            switch ($type) {
                case 'all':
                    $this->db->where('app_forums.user_id', $this->session->userdata['frontend_user_id']);
                    break;

                case 'draft':
                    $this->db->where('app_forums.user_id', $this->session->userdata['frontend_user_id']);
                    $this->db->where('app_forums.is_draft', 1);
                    break;

                case 'published':
                    $this->db->where('app_forums.user_id', $this->session->userdata['frontend_user_id']);
                    $this->db->where('app_forums.is_published', 1);
                    break;
            }
        }

        $this->db->order_by('app_forums.forum_id', 'DESC');


        $query = $this->db->get();
        return $query->result_array();
    }
    public function save($data, $id = NULL)
    {
        // Insert
        if ($id === NULL) {
            $this->db->set($data);
            $this->db->insert('app_forums');
            return TRUE;
        }
        // Update
        else {
            $this->db->set($data);
            $this->db->where('forum_id', $id);
            $this->db->update('app_forums');
            return TRUE;
        }

        return FALSE;
    }

    public function delete($id = NULL)
    {
        $this->db->where('forum_id', $id);
        $this->db->delete('app_forums');
        return TRUE;
    }

    public function count_totals($where = [])
    {
        $this->db->where('user_id', $this->session->userdata['frontend_user_id']);

        if ($where) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        return $this->db->count_all_results('app_forums');
    }

    public function insert_response($data, $id = NULL)
    {
        $this->db->set($data);
        $this->db->insert('app_forum_response');
        return TRUE;
    }

    public function get_response_by_id($id = NULL)
    {
        $this->db->select('*');
        $this->db->where('forum_id', $id);
        $this->db->from('app_forum_response');
        $this->db->join('app_users', 'app_users.user_id = app_forum_response.user_id');
        $this->db->order_by('app_forum_response.response_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_response($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('app_forum_response');
        $this->db->join('app_categories', 'app_categories.category_id = app_forum_response.response_id');
        $this->db->join('app_users', 'app_users.user_id = app_forum_response.user_id');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function delete_response($id = NULL)
    {
        $this->db->where('response_id', $id);
        $this->db->delete('app_forum_response');
        return TRUE;
    }

}