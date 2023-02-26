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

	public function profile()
	{
		$this->data['user'] = $this->user_m->get_by_id($this->session->userdata['frontend_user_id']);

        if ($this->input->post()) {
            $image_uploaded = '';
            if (!empty($_FILES)) {
                $image_uploaded = $this->upload_image();
            }

            $data = [
                'email'     => $this->input->post('email'),
                'name'      => $this->input->post('name'),
                'user_type' => $this->input->post('user_type'),
                'status'    => $this->input->post('status'),
                'image'     => $image_uploaded,
            ];

			if ($this->input->post('password') != '') {
				$data['password'] = md5($this->input->post('password'));
			}

            if ($this->user_m->save($data, $this->session->userdata['frontend_user_id'])) {
                redirect('user/profile');
            }
        }
		

		$this->data['subview'] = 'frontend/profile';
        $this->load->view('frontend/_layout_main', $this->data);
	}

	public function upload_image()
    {
        $image_mime = array('image/png', 'image/jpeg', 'image/gif');

        if (!in_array($_FILES['image']['type'], $image_mime)) {
            $config['upload_path'] = "./uploads/files/profile/";
        } else {
            $config['upload_path'] = "./uploads/images/profile/";
        }

        $config['allowed_types'] = 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';
        $config['max_size'] = '4000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $upload_data = $this->upload->data();

            return 'uploads/images/profile/' . $upload_data['file_name'];
        } else {
            echo $this->upload->display_errors();
            return FALSE;
        }
    }

}