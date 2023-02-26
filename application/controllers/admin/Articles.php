<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Articles extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('article/article_m');
        $this->load->model('category/category_m');
    }
    public function index()
    {
        // Ambil data articles dari model
        $this->data['articles'] = $this->article_m->get_articles();

        // printr($this->data['articles']);
        // die();

        // Kirim data articles ke view        
        $this->data['subview'] = 'admin/article/article';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit($id = NULL)
    {
        $result = $this->article_m->get_by_id($id);

        // $result['date_published'] = date('Y-m-d', strtotime($result['date_published']));

        if ($result) {
            $this->data['result'] = $result;
        } else {
            $this->data['result'] = [
                'title'          => set_value('title'),
                'content'        => '',
                'image'          => '',
                'category_id'    => '',
                'date_published' => date("Y-m-d")
            ];
        }

        // printr($this->data['result']);
        // die();
        
        $where = array('article_id' => $id);
        $data['app_articles'] = $this->article_m->save($where, 'article_id');

        $this->data['categories'] = $this->category_m->get_categories();

        if ($this->input->post()) {
            $image_uploaded = '';
            if (!empty($_FILES)) {
                $image_uploaded = $this->upload_image();
            }

            $data = [
                'title'          => $this->input->post('title'),
                'content'        => $this->input->post('content'),
                'category_id'    => $this->input->post('category_id'),
                'comment_status' => 1,
                'image'          => $image_uploaded,
                'user_id'        => $this->session->userdata('admin_user_id'),
                'date_published' => $this->input->post('date_published'),
            ];

            // printr($data); die();

            if ($this->article_m->save($data, $id)) {
                redirect('admin/articles');
            } else {
                printr('gagal');
            }
        }

        $this->data['subview'] = 'admin/article/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function upload_image()
    {
        $image_mime = array('image/png', 'image/jpeg', 'image/gif');

        if (!in_array($_FILES['image']['type'], $image_mime)) {
            $config['upload_path'] = "./uploads/files/";
        } else {
            $config['upload_path'] = "./uploads/images/";
        }

        $config['allowed_types'] = 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';
        $config['max_size'] = '4000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $upload_data = $this->upload->data();

            return 'uploads/images/' . $upload_data['file_name'];
        } else {
            echo $this->upload->display_errors();
            return FALSE;
        }
    }

    public function delete($id)
    {
        $this->article_m->delete($id);
        redirect('admin/articles');

    }

// public function upload()
// {
//     // $this->data['categories'] = $this->category_m->get_categories();

//     $config['upload_path'] = './uploads/';
//     $config['allowed_types'] = 'gif|jpg|png|PNG';
//     $config['max_size'] = 10000;
//     $config['max_width'] = 10000;
//     $config['max_height'] = 10000;

//     $this->load->library('upload', $config);

//     if (!$this->upload->do_upload('gambar')) {
//         echo "Gagal Tambah";
//     } else {
//         $gambar = $this->upload->data();
//         $gambar = $gambar['file_name'];
//         $gambar = $_FILES['gambar']['tmp_name'];
//         $title = $this->input->post('title', TRUE);
//         $content = $this->input->post('content', TRUE);
//         // $category_id = $this->input->post('category_id');
//         $comment_status = 1;
//         $user_id = 120;

//         $data = array(
//             'gambar' => $gambar,
//             'title' => $title,
//             'content' => $content,
//             // 'category_id' => 1,
//             'user_id' => 120,
//         );

//         $this->db->insert('app_articles', $data);
//         redirect('admin/articles');
//     }
// }

// public function delete_multiple()
// {
//     $data = [
//         $title = $this->input->post('title'),
//         $content = $this->input->post('content'),
//         $category_id = $this->input->post('category_id'),
//         $comment_status = $this->input->post('comment_status'),
//         $user_id = $this->input->post('user_id'),
//     ];

//     if (!empty($data)) {
//         foreach ($articles as $article) {
//             $this->db->where('article_id', $id);
//             $this->db->delete('app_articles');
//         }

//         $this->session->set_flashdata('message', 'Data berhasil dihapus');
//         redirect(base_url('admin/articles'));
//     } else {
//         $this->session->set_flashdata('message', 'Tidak ada data yang dipilih');
//         redirect(base_url('admin/articles'));

//     }
// }


}