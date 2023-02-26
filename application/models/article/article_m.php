<?php

class article_m extends CI_Model
{

    public function get_articles($limit = 0)
    {

        $this->db->select('*');
        $this->db->select('app_articles.image as article_image');
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
        $this->db->select('app_articles.image as article_image');
        $this->db->distinct();
        $this->db->from('app_articles');
        $this->db->join('app_categories', 'app_categories.category_id = app_articles.category_id', 'left');
        $this->db->join('app_users', 'app_users.user_id = app_articles.user_id', 'left');
        $this->db->where('article_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_by_category_id($id = NULL)
    {
        $this->db->select('*');
        $this->db->select('app_articles.image as article_image');
        $this->db->from('app_articles');
        $this->db->join('app_categories', 'app_categories.category_id = app_articles.category_id');
        $this->db->join('app_users', 'app_users.user_id = app_articles.user_id');
        $this->db->where('app_articles.category_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_by_type($type = NULL)
    {
        $this->db->select('*');
        $this->db->select('app_articles.image as article_image');
        $this->db->from('app_articles');
        $this->db->join('app_categories', 'app_categories.category_id = app_articles.category_id');
        $this->db->join('app_users', 'app_users.user_id = app_articles.user_id');

        if ($type !== NULL) {

            switch ($type) {
                case 'all':
                    $this->db->where('app_articles.user_id', $this->session->userdata['frontend_user_id']);
                    break;

                case 'draft':
                    $this->db->where('app_articles.user_id', $this->session->userdata['frontend_user_id']);
                    $this->db->where('app_articles.is_draft', 1);
                    break;

                case 'published':
                    $this->db->where('app_articles.user_id', $this->session->userdata['frontend_user_id']);
                    $this->db->where('app_articles.is_published', 1);
                    break;

                // case 'rejected':
                // 	$this->db->where('app_articles.user_id', $this->session->userdata['frontend_user_id']);
                // 	$this->db->where('app_articles.is_rejected', 1);
                // 	break;
            }
        }
        $this->db->order_by('app_articles.article_id', 'DESC');


        $query = $this->db->get();
        return $query->result_array();
    }

    public function save($data, $id = NULL)
    {
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

    public function delete($id = NULL)
    {
        $this->db->where('article_id', $id);
        $this->db->delete('app_articles');
        return TRUE;
    }

    // Count table row
    public function count_totals($where = [])
    {
        $this->db->where('user_id', $this->session->userdata['frontend_user_id']);

        if ($where) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        return $this->db->count_all_results('app_articles');
    }


}