<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user/user_m');

        // Login check
		$exception_uris = array(
			'admin/users/admin_login',
			'admin/users/logout'
		);

		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->user_m->admin_loggedin() == FALSE) {
				redirect('admin/users/admin_login');
			}
		}
    }

}