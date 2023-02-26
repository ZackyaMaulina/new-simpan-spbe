<?php
class Category extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('article/article_m');
    }

    public function index($category_id = NULL)
    {
        $this->data['articles'] = $this->article_m->get_by_category_id($category_id);

        // printr($this->data['articles']); die();

        $this->data['subview'] = 'frontend/category';
        $this->load->view('frontend/_layout_main', $this->data);
    }
}