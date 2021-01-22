<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ldatalinkage {



    public function datalinkage_list(){
        $CI =& get_instance();
        $CI->load->model('Datalinkages');
        $CI->load->model('Web_settings');
        $company_info = $CI->Datalinkages->retrieve_company();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata(); 
        // $data['total_customer']    = $CI->Datalinkages->count_datalinkage();
        $data['currency']          = $currency_details[0]['currency'];
        $data['title']             = display('manage_customer');
        $data['company_info']      = $company_info;
        $datalinkageList = $CI->parser->parse('datalinkage/index',$data,true);
        return $datalinkageList;
    }

    //Retrieve  Credit Customer List	

    // public function credit_customer_list() {
    //     $CI = & get_instance();
    //     $CI->load->model('Datalinkage');
    //     $CI->load->model('Web_settings');
    //     $company_info = $CI->Customers->retrieve_company();
    //     $currency_details = $CI->Web_settings->retrieve_setting_editdata();
    //     $data['currency']       = $currency_details[0]['currency'];
    //     $data['company_info']   = $company_info;
    //     $data['total_customer'] = $CI->Customers->count_credit_customer();
    //     $customerList = $CI->parser->parse('customer/credit_customer', $data, true);
    //     return $customerList;
    // }
}
?>