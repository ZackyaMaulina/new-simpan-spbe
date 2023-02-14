<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forums extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('forum/forum_m');
        $this->load->model('category/category_m');
    }
    public function index()
    {
        // Ambil data users dari model
        $this->data['forums'] = $this->forum_m->get_forums();

        // printr($this->data['forums']);
        // die();

        // Kirim data users ke view      
        $this->data['subview'] = 'admin/forum/forum';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit($id = NULL)
    {
        $result = $this->forum_m->get_by_id($id);
        // printr($result); die();
        if ($result) {
            $this->data['result'] = $result;
        } else {
            $this->data['result'] = [
                'title'          => set_value('title'),
                'content'        => '',
                'image'          => '',
                'category_id'    => '',
                'date_published' => date("Y-m-d")
            ];
        }

        // $where = array('forums_id' => $id);
        // $data['app_forums'] = $this->forum_m->save($where, 'forums_id');

        $this->data['categories'] = $this->category_m->get_categories();

        if ($this->input->post()) {

            // printr($this->input->post()); die();
            $data = [
                'title'          => $this->input->post('title'),
                'content'        => $this->input->post('content'),
                'category_id'    => $this->input->post('category_id'),
                'comment_status' => 1,
                'user_id'        => 120,
                'date_published' => $this->input->post('date_published'),
            ];

            if ($this->forum_m->save($data, $id)) {
                redirect('admin/forums');
            } else {
                printr('gagal');
            }
        }

        $this->data['subview'] = 'admin/forum/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function delete($id)
    {
        $this->forum_m->delete($id);
        redirect('admin/forums');

    }
}