<?php 



class Admin_model extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }
    function get_techs(){

            $this->db->select("*");
            $this->db->from("employees");
            $this->db->order_by('FEID', 'asc');
            return $this->db->get()->result();
           
    }
    function admin_login($username,$password){
         	$this->db->select("*");
            $this->db->from("employees");
            $this->db->where('FEID', $username);
            $this->db->where('PASSWD', $password);
            $this->db->where('ACTSTAT', 'active');

            return $this->db->get()->row();
    }

    function get_tech_orders($FEID,$type = null,$limit = null,$offset = null){
            $this->db->select("*");
            $this->db->from("Service_Records");
            $this->db->where('FE_Notes',$type);
            $this->db->limit($limit, $offset);
            $this->db->order_by('ApptDate', 'desc');
            $this->db->where('FEID', $FEID);

            return $this->db->get()->result();
    }

    function get_total_tech_record($FEID,$type = null){
            $this->db->select("count(CaseID) as Total");
            $this->db->from("Service_Records");
            $this->db->where('FE_Notes', $type);
            $this->db->where('FEID', $FEID);
            return $this->db->get()->result();
    }
    function get_order_details($caseID,$type = null){
            $this->db->select("*");
            $this->db->from("Service_Records");
            $this->db->where('caseID', $caseID);
            $this->db->where('FE_Notes',$type);
            return $this->db->get()->result();
    }
    function update_order($caseID,$data){

            $this->db->where('CaseID', $caseID);
            foreach ($data as $key => $value) {
                $this->db->set($key, $value);
            }
            $this->db->update("Service_Records");
            return $this->db->affected_rows();
           
    }
    function get_messages_total(){

            $this->db->select("count(num) as Total");
            $this->db->from("mssg3");
            return $this->db->get()->result();
           
    }
    function get_messageBoard_messages(){

            $this->db->select("*");
            $this->db->from("mssg3");
            $this->db->order_by('num', 'desc');
            return $this->db->get()->result();
           
    }
    function get_vendors(){

            $this->db->select("*");
            $this->db->from("vendor");
            return $this->db->get()->result();
           
    }
}
 ?>