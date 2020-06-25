<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 06/24/2020
 * Time: 10:10 AM
 */
// if( ! defined('BASEPATH'))
// 	exit('No direct script access allowed');
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
{
	public function index(){
		$data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['header'] = $this->load->view('layout/header.php', NULL, TRUE);
        $this->load->view('about', $data);
	}
}