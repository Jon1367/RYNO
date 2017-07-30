<?php 



if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admin_modal extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
                // Your own constructor code
    }

function admin_login($username,$password,$type){
     	$this->db->select("*");
        $this->db->from("employees");
        $this->db->where('FE_Name', $username);
        $this->db->where('PASSWD', $password);
        $this->db->where('typ', $type);
        return $this->db->get()->row();
}


}
 ?>