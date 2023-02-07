<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Articles extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('article/article_m');
    }
    public function index()
    {
        // Ambil data articles dari model
        $this->data['articles'] = $this->article_m->get_articles();

        // printr($this->data['articles']);
        // die();

        // Kirim data articles ke view        
        $this->data['subview'] = 'admin/article/article';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit($id = NULL)
    {
        $this->data['subview'] = 'admin/article/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }
}