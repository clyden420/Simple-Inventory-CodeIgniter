<?php

class Product_model extends CI_Model {

    public function __construct() {

        $this->load->database();
    }

    function add_product(){

        $data = array(
            'product_name' => $this->input->post('product_name'),
            'price' => $this->input->post('price'),
            'quantity' => $this->input->post('quantity'),
            'qr_code' => $this->input->post('qr_code')
        );

        return $this->db->insert('product_tbl', $data);
    }


    function view_product(){

        $query = $this->db->get('product_tbl');
        return $query;
    }

    function get_product(){

        $query = $this->db->get('product_tbl');
        return $query->result_array();
    }

    function fetch_edit($id){ //$id is own model variable that holds value from controller ($product_id) | variable don't matter here, value is.

        $this->db->where('product_id', $id);
        $query = $this->db->get('product_tbl');
        return $query->row_array();
        
        //return $query->result_array();
    }


    function update_product(){

        $id = $this->input->post('product_id');

        $data = array(
            'product_name' => $this->input->post('product_name'), 
            'price' => $this->input->post('price'),
            'quantity' => $this->input->post('quantity'),
            'qr_code' => $this->input->post('qr_code')
        );

        $this->db->where('product_id', $id);
        return $this->db->update('product_tbl', $data);
    }

    function fetch_single_data($id){ //$id is own model variable that holds value from controller ($product_id) | variable don't matter here, value is.

		$this->db->where('product_id', $id);
		$query = $this->db->get('product_tbl');
		return $query;

    }


    function delete_product() {

        $id = $this->input->post('delete_id');
        $this->db->where('product_id', $id);
        $this->db->delete('product_tbl');

        return true;
    }


    function login(){

        $this->db->where('email', $this->input->post('email', true));
        $this->db->where('password', $this->input->post('password', true));
        $result = $this->db->get('users_tbl');

        if($result->num_rows() == 1){
            return $result->row_array();
        }else{
            return false;
        }
    }
}