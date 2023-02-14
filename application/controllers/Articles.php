<?php
class Articles extends Frontend_Controller
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
        $this->data['articles'] = $this->article_m->get_articles(15);

        // printr($this->data['articles']); die();

         // Set data pada filter category
         $this->data['total_artikel'] = 1;
         $this->data['total_konsep'] = 2;
         $this->data['total_awaiting'] = 3;
         $this->data['total_published'] = 88;
         $this->data['total_rejected'] = 4687;

        $this->data['subview'] = 'frontend/archive';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function detail($id = NULL)
    {
       // Ambil data articles dari model
       $this->data['article'] = $this->article_m->get_by_id($id);

    //    printr($this->data['article']); die();
     
       $this->data['subview'] = 'frontend/detail';
       $this->load->view('frontend/_layout_main', $this->data);

    }
}