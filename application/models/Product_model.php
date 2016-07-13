<?php

/*
 * Developed By Ajinkya Dube
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function getMyProducts() {
        $uid = $this->session->userdata['userid'];
        $this->db->select('*');
        $this->db->where('uid', $uid);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function getRandomProducts() {
        $uid = $this->session->userdata['userid'];
        $this->db->select('*');
        $this->db->where('uid', $uid);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function addProduct() {
        $uid = $this->session->userdata['userid'];
        $currenttime = time();
        $arrProducts = array(
            'title' => $this->input->post('title'),
            'category' => $this->input->post('subcategory'),
            'description' => $this->input->post('description'),
            'uid' => $uid,
            'created_on' => $currenttime
        );
        $this->db->insert('products', $arrProducts);
        return $this->db->insert_id();
    }

}
