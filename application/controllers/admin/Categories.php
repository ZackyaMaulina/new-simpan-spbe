<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('category/category_m');
    }
    public function index()
    {
        // Ambil data users dari model
        $this->data['categories'] = $this->category_m->get_categories();

        // printr($this->data['categories']);
        // die();

        // Kirim data users ke view      
        $this->data['subview'] = 'admin/category/category';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit($id = NULL)
    {
        $where = array('category_id' => $id);
        $data['app_categories'] = $this->category_m->save($where, 'category_id');

        if ($this->input->post()) {
            $data = [
                'category_name' => $this->input->post('category_name'),
                // 'content' => $this->input->post('content'),
                // 'category_id' => $this->input->post('category_id'),
                // 'comment_status' => 1,
                // 'user_id' => 120,
            ];

            // printr($data);
            // die();

            if ($this->category_m->save($data, NULL)) {
                redirect('admin/categories');
            } else {
                printr('gagal');
            }

            
        }


        $this->data['subview'] = 'admin/category/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function delete($id)
    {
        $this->category_m->delete($id);
        redirect('admin/categories');

    }
}