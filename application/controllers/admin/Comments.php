<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comments extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('comment/comment_m');
    }
    public function index()
    {
        // Ambil data users dari model
        $this->data['comments'] = $this->comment_m->get_comments();

        // printr($this->data['comments']);
        // die();

        // Kirim data users ke view      
        $this->data['subview'] = 'admin/comment/comment';  
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit()
    {
        echo "ini halaman edit";
    }
}