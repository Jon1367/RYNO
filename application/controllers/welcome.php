<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	 public function __construct()
	 {
	    parent::__construct();
	    $this->load->helper('url');
	   	$this->load->model('admin_model');
	   	$this->load->library('form_validation');
	   	$this->load->library('session');
	 }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        if ($this->input->server('REQUEST_METHOD') === 'POST') {

			$username = $this->input->post('username');
    		$password = $this->input->post('password');
    		$type= $this->input->post('type');

     		$login_check = $this->admin_model->admin_login($username,$password,$type);

     		if($login_check != Null){
			//$this->load->library('Session/session');
			//session_start(); 
            	$this->session->set_userdata('username', $username);
            	redirect(base_url('index.php/welcome/home/'));

     		}else{

            	redirect(base_url('/'));

     		}

		}
		$this->load->view('welcome_message');
	}
		public function home(){


		$this->load->helper('url');
       // $this->load->model('admin_modal');
        $this->load->library('form_validation');
		$username = $this->session->userdata('username');
		//$username = $_SESSION['username'];
       	$data =  array('username' => $username );
		$this->load->view('admin/dashboard_home', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */