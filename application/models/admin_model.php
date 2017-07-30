<?php 



class Admin_model extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }

    function admin_login($username,$password,$type){
         	$this->db->select("*");
            $this->db->from("employees");
            $this->db->where('FE_Name', $username);
            $this->db->where('PASSWD', $password);
            $this->db->where('typ', $type);
            $this->db->where('ACTSTAT', 'active');

            return $this->db->get()->row();
    }


}
 ?>