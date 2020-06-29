<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_import_admin extends CI_Controller {
  private $filename = "import_data"; // Kita tentukan nama filenya
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('blog_import');
  }
  
  public function index(){
    $this->load->library('session');
    $this->load->helper('url');
    if(!$this->session->userdata('login')){
      $this->load->helper('form');
        $this->load->view('auth/login');
    }else{
      if($this->session->userdata('login')) {
        $session = $this->session->userdata('login');
        $data['import'] = $this->blog_import->view();
        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
        $this->load->view('admin/blog/view_import_barang', $data);
      }
    }
  }
  
  public function form(){
    $this->load->library('session');
    $this->load->helper('url');
    //jika seasson login belum ada maka tampilkan login
    if(!$this->session->userdata('login')){
      $this->load->helper('form');
        $this->load->view('auth/login');
    }else{
      if($this->session->userdata('login')) {
        $session = $this->session->userdata('login');
        $data = array();
        if(isset($_POST['preview'])){ 
          $upload = $this->blog_import->upload_file($this->filename);
          
          if($upload['result'] == "success"){ 
            include APPPATH.'third_party/PHPExcel/PHPExcel.php';
            
            $excelreader = new PHPExcel_Reader_Excel2007();
            $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); 
            $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
            $data['sheet'] = $sheet; 
          }else{
            $data['upload_error'] = $upload['error']; 
          }
        }
        $data['import'] = $this->blog_import->view();
        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/admin_footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/admin_sidebar.php', NULL, TRUE);
        $this->load->view('admin/blog/form_import_barang', $data);
      }
    }
  }
  
  public function import(){
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    
    $excelreader = new PHPExcel_Reader_Excel2007();
    $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); 
    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
    $data = array();
    
    $numrow = 1;
    foreach($sheet as $row){
      if($numrow > 1){
        array_push($data, array(
          'judul_blog'=>$row['A'], 
          'judul_2_blog'=>$row['B'], 
          'judul_3_blog'=>$row['C'], 
          'tanggal_blog'=>$row['D'],
          'kategori_blog'=>$row['E'],
          'id_adm'=>$row['F'],
          'tag_blog'=>$row['G'],
          'quotes_blog'=>$row['H'],
          'story_blog'=>$row['I'],
          'story2_blog'=>$row['J'],
          'img_1_blog'=>$row['K'],
          'img_2_blog'=>$row['L'],
          'img_3_blog'=>$row['M'],
          'img_4_blog'=>$row['N'],
          'img_5_blog'=>$row['O']
        ));
      }
      
      $numrow++; 
    }
    $this->blog_import->insert_multiple($data);
    
    redirect("blog_import_admin"); 
  }
}