<?php

/*
 * Developed By Ajinkya Dube
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getUser() {
        $uid = $this->session->userdata['userid'];
        $this->db->select('*');
        $this->db->where('id', $uid);
        $query = $this->db->get('users');
        return $query->row();
    }
    public function getUsers() {
        $uid = $this->session->userdata['userid'];
        $this->db->select('*');
        $this->db->where('id !=', $uid);
        $query = $this->db->get('users');
        return $query->result();
    }
    public function getPubUser($uid) {
        $this->db->select('*');
        $this->db->where('id', $uid);
        $query = $this->db->get('users');
        return $query->row();
    }

    public function checkUser() {

        $this->db->select('*');
        $this->db->where('emailid', $this->input->post('useremail'));
        $this->db->where('password', md5($this->input->post('userpassword')));
        $this->db->where('is_blocked', 0);
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            $row = $query->row();
            return $row;
        } else {
            return 0;
        }
    }

    public function update() {
        $uid = $this->session->userdata['userid'];
        $updatedon = time();
        $d = $this->input->post('dob');
        $dob = strtotime($d);
        $arrUserData = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'address' => $this->input->post('address'),
            'dob' => $dob,
            'mobile_no' => $this->input->post('mobile_no'),
            'updated_on' => $updatedon
        );

        $this->db->where('id', $uid);
        $this->db->update('users', $arrUserData);
    }

}
