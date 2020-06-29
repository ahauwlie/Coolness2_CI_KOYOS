<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang');
    }

    public function index() {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
                $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
                $data['barang'] = $this->model_barang->getAll();
                $this->load->view('admin/barang/index', $data);
            }
        }
    }

    public function addbarang()
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                if ($_SERVER['REQUEST_METHOD'] == "POST")
                {
                    $config['upload_path']   = './inti/images/upload/'; 
                    $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                    $config['max_size']      = 10240;
                    $location = base_url().'inti/images/upload/';
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('image')) {
                        $uploadedImage = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict = $location.$uploadedImage['file_name'];
                    }
                    if ($this->upload->do_upload('image2')) {
                        $uploadedImage2 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict2 = $location.$uploadedImage2['file_name'];
                    }
                    if ($this->upload->do_upload('image3')) {
                        $uploadedImage3 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict3 = $location.$uploadedImage3['file_name'];
                    }
                    if ($this->upload->do_upload('image4')) {
                        $uploadedImage4 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict4 = $location.$uploadedImage4['file_name'];
                    }
                    if ($this->upload->do_upload('image5')) {
                        $uploadedImage5 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict5 = $location.$uploadedImage5['file_name'];
                    }
                    if ($this->upload->do_upload('image6')) {
                        $uploadedImage6 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict6 = $location.$uploadedImage6['file_name'];
                    }
                    if ($this->upload->do_upload('image7')) {
                        $uploadedImage7 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict7 = $location.$uploadedImage7['file_name'];
                    }
                    if ($this->upload->do_upload('image8')) {
                        $uploadedImage8 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict8 = $location.$uploadedImage8['file_name'];
                    }
                    if ($this->upload->do_upload('image9')) {
                        $uploadedImage9 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict9 = $location.$uploadedImage9['file_name'];
                    }
                    if ($this->upload->do_upload('image10')) {
                        $uploadedImage10 = $this->upload->data();
                        $this->resizeImage($uploadedImage['file_name']); 
                        $pict10 = $location.$uploadedImage10['file_name'];
                    }


                    $this->load->helper(array('form', 'url'));

                    if($this->input->post('foto') == NULL || $this->input->post('foto2') == NULL || $this->input->post('foto3') == NULL || $this->input->post('foto4') == NULL || $this->input->post('foto5') == NULL || $this->input->post('foto6') == NULL || $this->input->post('foto7') == NULL || $this->input->post('foto8') == NULL || $this->input->post('foto9') == NULL || $this->input->post('foto10') == NULL){
                        $data = Array (
                            'nama_bar' => $this->input->post('nama'),
                            'deskripsi_bar' => $this->input->post('deskripsi'),
                            'harga_bar' => $this->input->post('harga'),
                            'size_bar' => $this->input->post('size'),
                            'tag_bar' => $this->input->post('tag'),
                            'kategori_bar' => $this->input->post('kategori'),
                            'img_1_bar' => $pict,
                            'img_2_bar' => $pict2,
                            'img_3_bar' => $pict3,
                            'img_4_bar' => $pict4,
                            'img_5_bar' => $pict5,
                            'img_6_bar' => $pict6,
                            'img_7_bar' => $pict7,
                            'img_8_bar' => $pict8,
                            'img_9_bar' => $pict9,
                            'img_10_bar' => $pict10                      
                        );
                    }
                    else{
                        $data = Array (
                            'nama_bar' => $this->input->post('nama'),
                            'deskripsi_bar' => $this->input->post('deskripsi'),
                            'harga_bar' => $this->input->post('harga'),
                            'size_bar' => $this->input->post('size'),
                            'tag_bar' => $this->input->post('tag'),
                            'kategori_bar' => $this->input->post('kategori'),
                            'img_1_bar' => $this->input->post('foto'),
                            'img_2_bar' => $this->input->post('foto2'),
                            'img_3_bar' => $this->input->post('foto3'),
                            'img_4_bar' => $this->input->post('foto4'),
                            'img_5_bar' => $this->input->post('foto5'),
                            'img_6_bar' => $this->input->post('foto6'),
                            'img_7_bar' => $this->input->post('foto7'),
                            'img_8_bar' => $this->input->post('foto8'),
                            'img_9_bar' => $this->input->post('foto9'),
                            'img_10_bar' => $this->input->post('foto10')
                        );
                    }                    

                    $this->model_barang->insert(html_escape($data), false);
                    redirect(site_url("barang_admin/index"));
                }
                else
                {
                    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                    $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
                    $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);

                    $this->load->view('admin/barang/add_bar', $data);
                }
            }
        }
    }

    public function resizeImage($filename){
      $source_path = $_SERVER['DOCUMENT_ROOT'] . './inti/images/upload/' . $filename;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . './inti/images/upload/';
        $config_manip = array(
            'image_library' => 'gd2',
            'source_image' => $source_path,
            'new_image' => $target_path,
            'create_thumb' => TRUE,
            'thumb_marker' => '',
            'width' => '1920',
            'height' => '1080'
        );

        $this->load->library('image_lib', $config_manip);
        

        if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
        }

        $this->image_lib->clear();
    }

    public function delete($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $this->model_barang->delete($id);
                }
                redirect(site_url('barang_admin/index'));
            }
        }
    }

    public function edit($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                if ($_SERVER['REQUEST_METHOD'] == "POST")
                {
                    $data = Array (
                        'nama_bar' => $this->input->post('nama'),
                        'deskripsi_bar' => $this->input->post('deskripsi'),
                        'harga_bar' => $this->input->post('harga'),
                        'size_bar' => $this->input->post('size'),
                        'tag_bar' => $this->input->post('tag'),
                        'kategori_bar' => $this->input->post('kategori'),
                        'img_1_bar' => $this->input->post('foto'),
                        'img_2_bar' => $this->input->post('foto2'),
                        'img_3_bar' => $this->input->post('foto3'),
                        'img_4_bar' => $this->input->post('foto4'),
                        'img_5_bar' => $this->input->post('foto5'),
                        'img_6_bar' => $this->input->post('foto6'),
                        'img_7_bar' => $this->input->post('foto7'),
                        'img_8_bar' => $this->input->post('foto8'),
                        'img_9_bar' => $this->input->post('foto9'),
                        'img_10_bar' => $this->input->post('foto10')   
                    );

                    $this->model_barang->update(html_escape($data), $id, false);
                    redirect(site_url("barang_admin/index"));
                }
                else
                {
                    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                    $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
                    $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
                    $data['barang'] = $this->model_barang->getSpecified($id);
                    $this->load->view('admin/barang/edit_bar', $data);
                }
            }
        }
    }

    public function detail($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
                $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);

                $data['barang'] = $this->model_barang->getSpecified($id);
                $this->load->view('admin/barang/detail_bar', $data);
            }
        }
    }

}