<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function login()
    {   
        $user_rules = $this->user_m->user_rules;
		$this->form_validation->set_rules($user_rules);

		// Process form
		if ($this->form_validation->run() == TRUE) {
			// We can login and redirect
			if ($this->user_m->user_login() == TRUE) {
				redirect('beranda');
			}
			else {
				$this->session->set_flashdata('error', 'That username/password combination does not exist');
				redirect('user/login');
			}
		}

        // Kirim data articles ke view        
        $this->load->view('frontend/login', $this->data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('beranda');
    }

    public function register()
    {
        $user_rules = $this->user_m->user_rules;
		$this->form_validation->set_rules($user_rules);

		// Process form
		if ($this->form_validation->run() == TRUE) {
			// We can login and redirect
            // printr($this->input->post()); die();
			if ($this->user_m->user_register() == TRUE) {
				redirect('beranda');
			}
			else {
				$this->session->set_flashdata('error', 'That username/password combination does not exist');
				redirect('user/login');
			}
		}

        $this->load->view('frontend/register', $this->data);
    }

}