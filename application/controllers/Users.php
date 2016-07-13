<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $this->checkLogin();
    }
    public function action($page = '') {
        switch ($page) {
            case 'login':
                $this->checkLogin();
                break;
            case 'register':
                $this->insertUser();
                break;
            case 'forgotpass':
                $this->forgotPass();
                break;
            case 'validateotp':
                $this->validateOtp();
                break;
            case 'resetpass':
                $this->resetPass();
                break;
            case 'logout':
                $this->logOut();
                break;
            default :
                echo "Hey";
                break;
        }
    }

    public function checkLogin() {

        if ($this->input->post()) {
            $this->form_validation->set_rules('useremail', 'Email', 'required');
            $this->form_validation->set_rules('userpassword', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                $arrUserDet = $this->User_model->checkUser();
                if ($arrUserDet) {

                    $intUserId = $arrUserDet->id;
                    if ($intUserId != null) {
                        $newdata = array(
                            'userid' => $arrUserDet->id,
                            'emailid' => $arrUserDet->emailid,
                            'username' => $arrUserDet->fname,
                            'lastname' => $arrUserDet->lname,
                            'logged_in' => TRUE,
                            'usertype' => $arrUserDet->usertype,
                            'imagename' => $arrUserDet->imagename
                        );

                        $this->session->set_userdata($newdata);
                        //print_r($newdata);
                        redirect('profile');
                    }
                } else {
                    $this->session->set_flashdata('errmsg', '<span class="alert alert-dismissible alert-danger" >Invalid Credentials</span>');
                    redirect('users/action/login');
                }
                //echo json_encode($arr);
            }
        } else {
            if (!$this->session->userdata('logged_in')) {
                $this->load->view('login');
            }else{
                redirect('profile');
            }
        }
    }
    public function logOut() {
		$this->session->sess_destroy();
		redirect('users/action/login');
	}

}
