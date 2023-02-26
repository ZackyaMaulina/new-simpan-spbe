<?php
class Helpdesk extends Frontend_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('helpdesk/helpdesk_m');
    }

    public function index()
    {
        if ($this->input->post()) {
            // printr($this->input->post());
            // die();

            $data = [
                'name'     => $this->input->post('name'),
                'email'    => $this->input->post('email'),
                'messages' => $this->input->post('messages'),
                'status'   => 0,
            ];

            if ($this->helpdesk_m->save($data, NULL)) {
                redirect('helpdesk');
            } else {
                printr('gagal');
            }
        }

        $this->data['subview'] = 'frontend/helpdesk';
        $this->load->view('frontend/_layout_main', $this->data);

    }
}