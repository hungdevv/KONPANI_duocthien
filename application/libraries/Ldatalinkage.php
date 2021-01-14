<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ldatalinkage {

    //Retrieve  Customer List	
   public function datalinkage_add_form() {
        $CI =& get_instance();
        $CI->load->model('Datalinkages');
        $CI->load->model('Web_settings');
        // $company_info = $CI->Customers->retrieve_company();
        // $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        // $data['total_customer']    = $CI->Customers->count_customer();
        // $data['currency']          = $currency_details[0]['currency'];
        // $data['title']             = display('datalink_age');
        // $data['company_info']      = $company_info;
        // $customerList = $CI->parser->parse('customer/customer',$data,true);
        // return $customerList;
    }
}

?>