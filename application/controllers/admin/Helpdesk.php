<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Helpdesk extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('helpdesk/helpdesk_m');
        $this->load->library('mail');

    }
    public function index()
    {
        // Ambil data articles dari model
        $this->data['helpdesks'] = $this->helpdesk_m->get_helpdesks();

        // Kirim data articles ke view        
        $this->data['subview'] = 'admin/helpdesk/helpdesk';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function view($id = NULL)
    {
        $this->data['result'] = $this->helpdesk_m->get_by_id($id);

        if ($this->input->post()) {
            // printr($this->input->post()); die();

            $data = [
                'status' => 1,
            ];

            // Update status pertanyaan menjadi telah dijawab
            if ($this->helpdesk_m->save($data, $id)) {

                //Kirim pertanyaan ke email pengguna
                $this->send_form_email($this->data['result']);
                redirect('admin/helpdesk');
            } else {
                printr('gagal');
            }
        }

        $this->data['subview'] = 'admin/helpdesk/view';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function send_form_email($result = NULL)
    {
        $message  = $this->input->post('jawaban');

        // Send email verification
        $params =array(
            'to'      => $result['email'],
            'subject' => 'Jawaban Pertanyaan pada Website SIMPAN-SPBE',
            'message' => $message
        );

        return $this->mail->send_mail($params);
    }

    public function delete($id)
    {
        $this->helpdesk_m->delete($id);
        redirect('admin/helpdesk');
    }

}