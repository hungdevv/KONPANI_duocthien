<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ldatalinkage {
	public function datalinkage_list() {
        $CI =& get_instance();
        $CI->load->model('Datalinkages');
        $CI->load->model('Web_settings');
        $company_info = $CI->Datalinkages->retrieve_company();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        // $data['total_customer']    = $CI->Customers->count_customer();
        $data['currency']          = $currency_details[0]['currency'];
        $data['title']             = display('manage_customer');
        $data['company_info']      = $company_info;
        $datalinkList = $CI->parser->parse('datalinkage/test',$data,true);
        return $datalinkList;
	}
	

}

?>