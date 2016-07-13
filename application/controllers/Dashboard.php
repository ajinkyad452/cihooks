<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('User_model');
            $this->load->model('Product_model');
            $this->load->model('Social_model');
        }

	public function index()
	{
            $arrUsers['users'] = $this->User_model->getUsers();
            $arrUsers['products'] = $this->Product_model->getMyProducts();
            $arrUsers['disproducts'] = $this->Product_model->getRandomProducts();
            $arrUsers['timelines'] = $this->Social_model->getMyActivity();
            $this->load->view('dashboard', $arrUsers);
	}
}
