<?php 



class Admin_model extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }

    function admin_login($username,$password,$type){
         	$this->db->select("*");
            $this->db->from("employees");
            $this->db->where('FEID', $username);
            $this->db->where('PASSWD', $password);
            $this->db->where('typ', $type);
            $this->db->where('ACTSTAT', 'active');

            return $this->db->get()->row();
    }

    function get_colsed_orders($FEID,$limit = null,$offset = null){
            $this->db->select("*");
            $this->db->from("Service_Records");
            $this->db->where('FE_Notes', 'Closed');
            $this->db->limit($limit, $offset);
            $this->db->order_by('ApptDate', 'desc');
            $this->db->where('FEID', $FEID);

            return $this->db->get()->result();
    }

    function get_total_colsed_record($FEID){
            $this->db->select("count(CaseID) as Total");
            $this->db->from("Service_Records");
            $this->db->where('FE_Notes', 'Closed');
            $this->db->where('FEID', $FEID);
            return $this->db->get()->result();
    }
    function get_order_details($caseID){
            $this->db->select("*");
            $this->db->from("Service_Records");
            $this->db->where('caseID', $caseID);
            return $this->db->get()->result();
    }
}
 ?>