
<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    
class Cdatalinkage extends CI_Controller {
    public $menu;
    
    function __construct() {
        parent::__construct();
        $this->db->query('SET SESSION sql_mode = ""');
        $this->load->library('auth');
        $this->load->library('ldatalinkage');
        $this->load->library('session');
        $this->load->model('Datalinkages');
        $this->auth->check_admin_auth();
    }
        // Default loading for Customer System.

    public function index()
        {	
            $CI =& get_instance();
            $this->auth->check_admin_auth();
            $CI->load->library('ldatalinkage');
            $CI->load->model('Datalinkages');
            $content =$this->ldatalinkage->datalinkage_list();
            $this->template->full_admin_html_view($content);
        
        }
    public function CheckDataLinkList(){
            // GET data
            $this->load->model('Datalinkages');
            // $this->auth->check_admin_auth();
            $postData = $this->input->post();
            $data = $this->Datalinkages->getDataLinkList($postData);
            echo json_encode($data);
        } 
    public function datalink_update_form($datalink_id) {
            $content = $this->ldatalinkage->customer_edit_data($datalink_id);
            $this->template->full_admin_html_view($content);
        }
    public function manage_datalinkage() {
            $CI =& get_instance();
            $this->auth->check_admin_auth();
            $CI->load->library('ldatalinkage');
            $CI->load->model('Datalinkages');
            $content =$this->ldatalinkage->datalinkage_list();
            $this->template->full_admin_html_view($content);
 } 
 public function datalink_1()
 {

     $CI =& get_instance();
     $this->auth->check_admin_auth();
     $CI->load->library('ldatalinkage');
     $CI->load->model('Datalinkages');
     $content =$this->ldatalinkage->datalinkage_list();
     $this->template->full_admin_html_view($content);
 }   

 public function datalink_2() {
     $CI =& get_instance();
     $this->auth->check_admin_auth();
     $CI->load->library('ldatalinkage');
     $CI->load->model('Datalinkages');
     $content =$this->ldatalinkage->datalinkage_list();
     $this->template->full_admin_html_view($content);
 }
}

?>