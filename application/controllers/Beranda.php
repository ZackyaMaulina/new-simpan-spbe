<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('article/article_m');
        $this->load->model('category/category_m');
        
    }
    public function index()
    {
        // Ambil data articles dari model
        $this->data['articles'] = $this->article_m->get_articles(3);

        // Kirim data articles ke view        
        $this->data['subview'] = 'frontend/home';
        $this->load->view('frontend/_layout_main', $this->data);
      
    }

    

    

}