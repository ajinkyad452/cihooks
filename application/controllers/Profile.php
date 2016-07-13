<?php

/* 
 * Developed By Ajinkya Dube
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Social_model');
    }

    public function index() {
        $arrUsers['users'] = $this->User_model->getUser();
        $this->load->view('profile', $arrUsers);
    }
    public function pub() {
        $pubuid = $this->uri->segment(3);
        $arrUsers['users'] = $this->User_model->getPubUser($pubuid);
        $arrUsers['isfriend'] = count($this->Social_model->getRelation($pubuid));
        $this->load->view('pub_profile', $arrUsers);
    }

    public function update() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('emailid', 'emailid', 'required');

            if ($this->form_validation->run() == FALSE) {
                $arrUsers['users'] = $this->User_model->getUser();
                $this->load->view('profile', $arrUsers);
            } else {
                $this->User_model->update();
                //send_email($this->session->userdata['emailid'], '3');
                redirect('profile');
            }
        } else {
            $arrUsers['users'] = $this->User_model->getUser();
            $this->load->view('profile', $arrUsers);
        }
    }
    public function addfollow() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('fid', 'fid', 'required');

            if ($this->form_validation->run() == FALSE) {
                echo 'Error';
            } else {
                $this->Social_model->addFollow();
                echo 'Success';
            }
        } else {
            redirect('profile');
        }
    }
}