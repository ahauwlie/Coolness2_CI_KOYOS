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
    public function index() {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $this->load->view('shop', $data);
    }
    public function detail() {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $this->load->view('detail_shop', $data);
    }
}