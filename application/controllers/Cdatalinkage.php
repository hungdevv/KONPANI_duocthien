
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
        
        // $content = $this->ldatalinkage->datalinkage_add_form();
        // $this->template->full_admin_html_view($content);
        $content = $this->ldatalinkage->customer_list();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
        // $content = $this->lcustomer->customer_edit_data($customer_id);
        // $this->template->full_admin_html_view($content);
    }
    public function medication_list_BYT()
    {
            
        // $content = $this->ldatalinkage->datalinkage_add_form();
        // $this->template->full_admin_html_view($content);
        $content = $this->ldatalinkage->customer_list();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
        // $content = $this->lcustomer->customer_edit_data($customer_id);
        // $this->template->full_admin_html_view($content);
    }   
    // public function credit_customer_search_item() {
    //     $customer_id = $this->input->post('customer_id',true);
    //     $content = $this->lcustomer->credit_customer_search_item($customer_id);
    //     $this->template->full_admin_html_view($content);
    // }
}
?>