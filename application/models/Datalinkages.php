<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Datalinkages extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function datalink_list($per_page=null,$page=null)
	{
		$query=$this->db->select('*')
				->from('invoice_sell_information')
				->limit($per_page,$page)
				->get();
		if ($query->num_rows() > 0) {
		 	return $query->result_array();	
		}
		return $query;

    }
public function getDataLinkList($postData=null){
   
        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; 
        // Search value

        ## Search 
        $searchQuery = "";
        if($searchValue != ''){
           $searchQuery = " (bill_code like '%".$searchValue."%' or seller_name like '%".$searchValue."%' or customer_name like '%".$searchValue."%')";
        }
        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('invoice_sell_information a');
         if($searchValue != '')
        $this->db->where($searchQuery);
        $records = $this->db->get()->num_rows();
        $totalRecords = $records;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('invoice_sell_information a');
        if($searchValue != '')
           $this->db->where($searchQuery);
        $records = $this->db->get()->num_rows();
        $totalRecordwithFilter = $records;

        ## Fetch records
       $this->db->select("*");
        $this->db->from('invoice_sell_information');
        if($searchValue != '')
        $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get()->result();
        $data = array();
        $sl =1;
 
        foreach($records as $record ){
         $button = '';
         $base_url = base_url();
         $jsaction = "return confirm('Are You Sure?')";


      
      
         if($this->permission1->method('manage_datalinkage','update')->access()){
            $button .='<a href="'.$base_url.'Cdatalinkage/datalink_update_form/'.$record->bill_code.'" class="btn btn-info btn-xs"  data-placement="left" title="'. display('update').'"><i class="fa fa-edit"></i></a> ';
        }
           if($this->permission1->method('manage_datalinkage','delete')->access()){
             $button .='<a href="'.$base_url.'Cdatalinkage/datalink_delete/'.$record->bill_code.'" class="btn btn-danger btn-xs " onclick="'.$jsaction.'"><i class="fa fa-trash"></i></a>';
         }
        

       
              
           $data[] = array( 
               'sl'               =>$sl,
               'bill_code'    =>html_escape($record->bill_code),
               'bill_code_QG'         =>html_escape($record->bill_code_QG),
               'base_code'           =>html_escape($record->base_code),
               'medicine_code_QG'          =>html_escape($record->medicine_code_QG),
               'seller_name'            =>html_escape($record->seller_name),
               'customer_name'            =>html_escape($record->customer_name),
               'vote_number'    =>html_escape($record->vote_number),
               'total_money'          =>html_escape($record->total_money),
               'result'              =>html_escape($record->result),
               'action'             =>html_escape($record->action),
                'button' => $button
           ); 
           $sl++;
        }

        ## Response
        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecordwithFilter,
           "iTotalDisplayRecords" => $totalRecords,
           "aaData" => $data
        );

        return $response;
   }
public function retrieve_company() {
      $this->db->select('*');
      $this->db->from('company_information');
      $this->db->limit('1');
      $query = $this->db->get();
      if ($query->num_rows() > 0) {
          return $query->result_array();
      }
      return false;
  }

}

?>