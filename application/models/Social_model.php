<?php

/* 
 * Developed By Ajinkya Dube
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Social_model extends CI_Model {
    
    public function getRelation($pubuid) {
        $uid = $this->session->userdata['userid'];
        $this->db->select('*');
        $this->db->where('uid', $uid);
        $this->db->where('fid', $pubuid);
        $query = $this->db->get('social');
        return $query->row();
    }
    public function getMyActivity() {
        $uid = $this->session->userdata['userid'];
        $this->db->select('*');
        $this->db->where('uid', $uid);
        $query = $this->db->get('social');
        return $query->result();
    }
    public function addFollow() {
        $uid = $this->session->userdata['userid'];
        $currenttime = time();
        $arrProducts = array(
            'uid' => $uid,
            'fid' => $this->input->post('fid'),
            'created_on' => $currenttime
        );
        $this->db->insert('social', $arrProducts);
        return $this->db->insert_id();
    }
    public function removeFollow() {
        $uid = $this->session->userdata['userid'];
        $fid =  $this->input->post('fid');
        $this->db->select('*');
        $this->db->where('uid', $uid);
        $this->db->where('fid', $fid);
        $this->db->remove('social');
    }
}