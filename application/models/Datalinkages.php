<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Datalinkages extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function datalinkage() {
        $this->db->select('*');
        $this->db->from('customer_information');
        $this->db->order_by('create_date', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }
}
 ?>