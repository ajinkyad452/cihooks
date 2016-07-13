<?php

/*
 * Developed By Ajinkya Dube
 */

class SessionData {

    var $CI;

    function __construct() {
        $this->CI = & get_instance();
        if (!isset($this->CI->session))  //Check if session lib is loaded or not
            $this->CI->load->library('session');  //If not loaded, then load it here
    }

    function initializeData() {
        $allowedclasses = array('users');
        // This function will run after the constructor for the controller is ran
        // Set any initial values here
        if (!$this->CI->session->userdata('logged_in')) {    //this is line 13
            $checkclass = $this->CI->router->fetch_class();
            if (!in_array($checkclass, $allowedclasses)) {
                redirect('users/action/login');
            }
        }
    }

}
