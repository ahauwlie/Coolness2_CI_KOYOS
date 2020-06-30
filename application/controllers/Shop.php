<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 06/25/2020
 * Time: 12:11 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller
{
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('model_barang');
        $this->load->library('pagination');
    }
    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "Shop/index";
        $config["total_rows"] = $this->model_barang->record_count();
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['barang'] =  $this->model_barang->getAr($config["per_page"], $page);
        $data['kategori'] =  $this->model_barang->dis_products1();
        $data['tag'] =  $this->model_barang->dis_products2();
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $this->load->view('shop', $data);
    }
    public function showme($kategori_bar)
    {    
        $data['kategori'] = $this->model_barang->dis_products1();
        $data['tag'] =  $this->model_barang->dis_products2();
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $data['comes'] = $this->model_barang->showme($kategori_bar);
        $this->load->view('shopkat',$data);
    }
    public function tag($tag_bar)
    {    
        $data['kategori'] = $this->model_barang->dis_products1();
        $data['tag2'] =  $this->model_barang->dis_products2();
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $data['tag'] = $this->model_barang->showme2($tag_bar);
        $this->load->view('shoptag',$data);
    }
    public function detail($id) {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $data['lol'] = $this->model_barang->nyoba($id);
        $data['kategori'] = $this->model_barang->dis_products1();
        $data['tag'] =  $this->model_barang->dis_products2();
        $this->load->view('detail_shop', $data);
    }
}