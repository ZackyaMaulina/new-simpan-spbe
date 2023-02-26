<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        // $this->load->model('user/user_m');

        // // Login check
		// $exception_uris = array(
		// 	'admin/users/admin_login',
		// 	'admin/users/logout'
		// );

		// if (in_array(uri_string(), $exception_uris) == FALSE) {
		// 	if ($this->user_m->admin_loggedin() == FALSE) {
		// 		redirect('admin/users/admin_login');
		// 	}
		// }
    }
    public function index()
    {
        // Ambil data users dari model
        $this->data['users'] = $this->user_m->get_users();

        // Kirim data users ke view      
        $this->data['subview'] = 'admin/user/user';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit($id = NULL)
    {
        $result = $this->user_m->get_by_id($id);

        if ($result) {
            $this->data['result'] = $result;
        } else {
            $this->data['result'] = [
                'user_id'   => NULL,
                'image'     => '',
                'username'  => '',
                'email'     => '',
                'name'      => '',
                'user_type' => '',
                'password'  => '',
                'status'    => 1,
            ];
        }

        if ($this->input->post()) {

            // printr($this->input->post()); die();
            $image_uploaded = '';
            if (!empty($_FILES)) {
                $image_uploaded = $this->upload_image();
            }

            $data = [
                // 'username'  => $this->input->post('username'),
                'email'     => $this->input->post('email'),
                'name'      => $this->input->post('name'),
                'user_type' => $this->input->post('user_type'),
                'status'    => $this->input->post('status')
            ];
            

            if (! $id) {
				$data['username'] = $this->input->post('username');
			}

            if ($image_uploaded != '') {
				$data['image'] = $image_uploaded;
			}

			if ($this->input->post('password') != '') {
				$data['password'] = md5($this->input->post('password'));
			}

            if ($this->user_m->save($data, $id)) {
                redirect('admin/users');
            } else {
                printr('gagal');
            }
        } {
            $this->data['subview'] = 'admin/user/edit';
            $this->load->view('admin/_layout_main', $this->data);
        }
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

    public function delete($id)
    {
        $this->user_m->delete($id);
        redirect('admin/users');

    }

    public function admin_login()
    {
        $this->data['header_meta']= ['meta_title' => '']; 
        $this->data['meta_generator']= '';
        $this->data['meta_robot']= '';
        $this->data['header_meta']['meta_description']= '';
        $this->data['header_meta']['meta_keyword']= '';
        $this->data['theme_url']= '';

        $user_rules = $this->user_m->user_rules;
		$this->form_validation->set_rules($user_rules);

		// Process form
		if ($this->form_validation->run() == TRUE) {
			// printr($this->input->post()); die();
            // Proses login di model > admin_login
			if ($this->user_m->admin_login() == TRUE) {
				redirect('admin/articles');
			}
			else {
				$this->session->set_flashdata('error', 'That username/password combination does not exist');
			}
		}

        $this->load->view('admin/user/admin_login', $this->data);
       
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/users/admin_login');
    }

}