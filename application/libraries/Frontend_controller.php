<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user/user_m');
        $this->load->helper('language');

        // Login check
        $exception_uris = array(
            'user/login',
            'user/logout',
            'beranda',
        );

        if (in_array(uri_string(), $exception_uris) == FALSE) {
            if ($this->user_m->loggedin() == FALSE) {
                redirect('user/login');
            }
        }

        
        $this->data['header_meta'] = ['meta_title' => ''];
        $this->data['meta_generator'] = '';
        $this->data['meta_robot'] = '';
        $this->data['header_meta']['meta_description'] = '';
        $this->data['header_meta']['meta_keyword'] = '';
        $this->data['theme_url'] = '';

        //data untuk footer
        $this->data['general'] = [
            'website_address' => ' Komplek Perkantoran PEMDA Kuantan Singingi, Kel.Sungai Jering, Tengah, Kab. Kuantan Singingi, Riau 29566',
            'website_phone' => '(0760) 561835',
            'website_email' => 'simpan.spbe@kuansing.go.id'
        ];
    }



}