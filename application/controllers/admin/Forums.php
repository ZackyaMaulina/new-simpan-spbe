<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forums extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('forum/forum_m');
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

    public function edit()
    {
        echo "ini halaman edit";
    }
}