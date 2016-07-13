<?php

/*
 * Developed By Ajinkya Dube
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function add() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('subcategory', 'Sub Category', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('add_product');
            } else {
                $this->Product_model->addProduct();
                $this->load->view('add_product');
            }
        } else {
            $this->load->view('add_product');
        }
    }

}
