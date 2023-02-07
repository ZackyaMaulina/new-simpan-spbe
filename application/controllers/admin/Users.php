<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user/user_m');
    }
    public function index()
    {
        // Ambil data users dari model
        $this->data['users'] = $this->user_m->get_users();

        // Kirim data users ke view      
        $this->data['subview'] = 'admin/user/user';  
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit()
    {
        $this->data['subview'] = 'admin/user/edit';  
        $this->load->view('admin/_layout_main', $this->data);
    }
}