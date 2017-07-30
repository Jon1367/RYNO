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

    function get_colsed_orders(){
            $this->db->select("*");
            $this->db->from("Service_Records");
            $this->db->where('FE_Notes', 'Closed');
            return $this->db->get()->result();
    }


}
 ?>