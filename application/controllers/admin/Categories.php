<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
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

    public function edit()
    {
        echo "ini halaman edit";
    }
}