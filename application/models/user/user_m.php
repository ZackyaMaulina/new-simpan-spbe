<?php

class user_m extends CI_Model {

    public $user_rules = array(
		'username' => array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|required'
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Kata Sandi',
			'rules' => 'trim|required'
		)
	);

    public function get_users()
    {
        
        $this->db->select('*');
        $this->db->from('app_users');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_by_id($id = NULL)
    {
        $this->db->select('*');
        $this->db->where('user_id', $id);
        $this->db->from('app_users');
        $query = $this->db->get();
        return $query->row_array();  
    }

    public function save($data, $id = NULL){
		// Insert
		if ($id === NULL) {
			$this->db->set($data);
			$this->db->insert('app_users');
            return TRUE;
		}
		// Update
		else {
			$this->db->set($data);
			$this->db->where('user_id', $id);
			$this->db->update('app_users');
            return TRUE;
		}

		return FALSE;
	}

    public function delete($id=NULL)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('app_users');
        return TRUE;
    }
    
	public function user_login()
	{
        $this->db->select('*');
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
		$this->db->where('user_type', 'user');
        $this->db->from('app_users');
        $query = $this->db->get();
        $frontend_user = $query->row_array(); 

		if ($frontend_user) {
			$update_key = array(
            	'last_login' => date("Y-m-d"),
            );

            // $this->save_session($update_key, $frontend_user['user_id']);
			$this->register_session($frontend_user);

            return TRUE;
		}

        return FALSE;
	}

    public function register_session($frontend_user)
	{
		if (count($frontend_user)) {
			// Log in user
			$data_login = array(
				'frontend_user_id'    => $frontend_user['user_id'],
				'frontend_username'   => $frontend_user['username'],
				'frontend_name'       => $frontend_user['name'],
				'frontend_user_email' => $frontend_user['email'],
				'frontend_user_image' => $frontend_user['image'],
				'frontend_loggedin'   => TRUE,
				'last_login'          => date("Y-m-d"), //short_date('Y-m-d H:i:s', $date="now")
			);

			$this->session->set_userdata($data_login);
		}
	}

    public function loggedin()
	{
		return (bool) $this->session->userdata('frontend_loggedin');
	}

	public function admin_loggedin()
	{
		return (bool) $this->session->userdata('admin_loggedin');
	}

    public function user_register()
	{
        $data = [
            'username'  => $this->input->post('username'),
            'password'  => md5($this->input->post('password')),
            'email'     => $this->input->post('email'),
            'name'      => $this->input->post('name'),
            'user_type' => 'user',
            'status'    => 1,
            'is_active' => 1,
        ];

		if ($this->save($data, NULL)) {
			
            redirect('user/login');
		}

        return FALSE;
	}

	public function admin_login()
	{
        $this->db->select('*');
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
		$this->db->where('user_type', 'admin');
        $this->db->from('app_users');
        $query = $this->db->get();
        $admin_user = $query->row_array(); 

		// printr($admin_user); die();

		if ($admin_user) {
			// $update_key = array(
            // 	'last_login' => date("Y-m-d"),
            // );

            // $this->save_session($update_key, $admin_user['user_id']);
			$this->register_admin_session($admin_user);

            return TRUE;
		}

        return FALSE;	
	}

	public function register_admin_session($admin_user)
	{
		if ($admin_user) {
			// Log in user
			$data_login = array(
				'admin_user_id'    => $admin_user['user_id'],
				'admin_username'   => $admin_user['username'],
				'admin_name'       => $admin_user['name'],
				'admin_user_email' => $admin_user['email'],
				'admin_user_image' => $admin_user['image'],
				'admin_loggedin'   => TRUE,
				'admin_last_login'       => date("Y-m-d"), //short_date('Y-m-d H:i:s', $date="now")
			);

			$this->session->set_userdata($data_login);
		}
	}
	
}
