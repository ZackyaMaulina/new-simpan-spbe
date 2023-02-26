<?php
class Forums extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('forum/forum_m');
        $this->load->model('category/category_m');
    }

    public function index()
    {

        $this->data['pagetype'] = 'forums';

        $type = $this->input->get('type');
        $this->data['type'] = isset($type) ? $type : NULL;
        $this->data['forums'] = $this->forum_m->get_by_type($this->data['type']);

        if ($this->input->post()) {


            $data = [
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'category_id' => $this->input->post('category_id'),
                'comment_status' => 1,
                'user_id' => $this->session->userdata('frontend_user_id'),
                'date_published' => date('Y-m-d H:i:s'),
                'is_draft' => $this->input->post('action') === 'draft' ? 1 : 0,
                'is_published' => $this->input->post('action') === 'publish' ? 1 : 0,
            ];
            // printr($data); die();

            if ($this->forum_m->save($data, NULL)) {
                redirect('forums');
            } else {
                printr('gagal');
            }
        }

        // Set data pada filter category
        $this->data['total_artikel'] = $this->forum_m->count_totals();
        $this->data['total_konsep'] = $this->forum_m->count_totals(['is_draft' => 1]);
        $this->data['total_published'] = $this->forum_m->count_totals(['is_published' => 1]);

        $this->data['subview'] = 'frontend/forums';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function detail($id = NULL)
    {
        $this->data['pagetype'] = 'forums';

        // Ambil data articles dari model
        $this->data['forum'] = $this->forum_m->get_by_id($id);
        $data = ['hits' => $this->data['forum']['hits'] + 1];
        $this->forum_m->save($data, $id);

        $this->data['response'] = $this->forum_m->get_response_by_id($id);
        // printr( $this->data['response']); die();

        if ($this->input->post()) {

            // printr($this->input->post()); die();

            $data = [
                'forum_id'  => $id,
                'parent_id' => 0,
                'comment'   => $this->input->post('comment'),
                'status'    => 1,
                'user_id'   => $this->session->userdata['frontend_user_id'],
            ];

            if ($this->forum_m->insert_response($data, NULL)) {
                redirect('forums/detail/' . $id);
            } else {
                printr('gagal');
            }
        }

        $this->data['subview'] = 'frontend/detail_forum';
        $this->load->view('frontend/_layout_main', $this->data);
    }
}