
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
        //Here ,0 means array position 0 will be active class
        // $content = $this->lcustomer->customer_edit_data($customer_id);
        // $this->template->full_admin_html_view($content);

        // ----------test1----------

        // $content = $this->ldatalinkage->datalinkage_list();
        // $this->template->full_admin_html_view($content);

        // --------------end test1 --------

        $CI =& get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('ldatalinkage');
        $CI->load->model('Datalinkages');
        $content =$this->ldatalinkage->datalinkage_list();
        $this->template->full_admin_html_view($content);
    }   

    public function medication_list_BYT1() {
        $CI =& get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('ldatalinkage');
        $CI->load->model('Datalinkages');
        $content =$this->ldatalinkage->datalinkage_list();
        $this->template->full_admin_html_view($content);
    }
    public function count_datalinkage() {
        return $this->db->count_all("medication_list_byt");
    }

    
    public function CheckDatalinkageList(){
        // GET data
        $this->load->model('Datalinkages');
        $postData = $this->input->post();
        $data = $this->Datalinkages->getDatalinkageList($postData);
        echo json_encode($data);
    }   

    public function manage_datalinkage() {
        $CI =& get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('ldatalinkage');
        $CI->load->model('Datalinkages');
        $content =$this->ldatalinkage->datalinkage_list();
        $this->template->full_admin_html_view($content);
    }

    public function datalinkage_update_form($id) {
        $content = $this->ldatalinkage->customer_edit_data($id);
        $this->template->full_admin_html_view($content);
    }

    public function datalinkage_search_item() {
        $id = $this->input->post('id',true);
        $content = $this->ldatalinkage->datalinkage_search_item($id);
        $this->template->full_admin_html_view($content);
    }
    public function customer_update_form($customer_id) {
        $content = $this->lcustomer->customer_edit_data($customer_id);
        $this->template->full_admin_html_view($content);
    }



    public function datalinkage_delete($customer_id) {
        $this->load->model('Customers');
          $invoiceinfo = $this->db->select('*')->from('invoice')->where('customer_id',$customer_id)->get()->num_rows();
        if($invoiceinfo > 0){
          $this->session->set_userdata(array('error_message' => 'Sorry !! You can not delete this Customer.This Customer already Engaged in calculation system!'));
       redirect(base_url('Ccustomer/manage_customer'));
        }else{
        $customerinfo = $this->db->select('customer_name')->from('customer_information')->where('customer_id',$customer_id)->get()->row();
       $customer_head = $customerinfo->customer_name.'-'.$customer_id;
        $this->Customers->delete_customer($customer_id,$customer_head);
        $this->Customers->delete_invoic($customer_id);
        $this->session->set_userdata(array('message' => display('successfully_delete')));
       redirect(base_url('Ccustomer/manage_customer'));
     }
        }
    // public function credit_customer_search_item() {
    //     $customer_id = $this->input->post('customer_id',true);
    //     $content = $this->lcustomer->credit_customer_search_item($customer_id);
    //     $this->template->full_admin_html_view($content);
    // }
}
?>