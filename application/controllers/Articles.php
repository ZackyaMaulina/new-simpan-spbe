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
        
        $type = $this->input->get('type');
        $this->data['type'] = isset($type) ? $type : NULL;

        // Ambil data articles dari model
    //    printr($this->data);die();

        $this->data['articles'] = $this->article_m->get_by_type($this->data['type']);

        // printr($this->data['categories']); die();
        // printr($this->data['articles']); die();

        if ($this->input->post()) {
            // printr($this->input->post()); die();
            
            $data = [
                'title'          => $this->input->post('title'),
                'content'        => $this->input->post('content'),
                'category_id'    => $this->input->post('category_id'),
                'comment_status' => 1,
                'user_id'        => $this->session->userdata('frontend_user_id'),
                'date_published' => date('Y-m-d H:i:s'),
                'is_draft'       => $this->input->post('action') === 'draft' ? 1 : 0,
                'is_published'   => $this->input->post('action') === 'publish' ? 1 : 0,
            ];

            // printr($data); die();

            if ($this->article_m->save($data, NULL)) {
                redirect('articles');
            } else {
                printr('gagal');
            }
        }

         // Set data pada filter category
         $this->data['total_artikel'] = $this->article_m->count_totals();
         $this->data['total_konsep'] = $this->article_m->count_totals(['is_draft' => 1]);
         $this->data['total_published'] = $this->article_m->count_totals(['is_published' => 1]);

        $this->data['subview'] = 'frontend/articles';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function detail($id = NULL)
    {
       // Ambil data articles dari model
       $this->data['article'] = $this->article_m->get_by_id($id);
       $data = ['hits' => $this->data['article']['hits'] + 1];
       $this->article_m->save($data, $id);

    //    printr($this->data['article']); die();
     
       $this->data['subview'] = 'frontend/detail';
       $this->load->view('frontend/_layout_main', $this->data);

    }
}