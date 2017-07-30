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
            	$this->session->set_userdata('username', $login_check->FE_Name);
            	$this->session->set_userdata('userid', $login_check->FEID);

            	redirect(base_url('index.php/welcome/home/'));

     		}else{

            	redirect(base_url('/'));

     		}

		}
		$this->load->view('welcome_message');
	}
		public function home(){


		$username = $this->session->userdata('username');
		$userid = $this->session->userdata('userid');

		//$username = $_SESSION['username'];
       	$data =  array('username' => $username );
		$this->load->view('template/header', $data);
		$this->load->view('admin/dashboard_home', $data);
		$this->load->view('template/footer', $data);


	}
	public function view_calls(){


		$username = $this->session->userdata('username');
		$userid = $this->session->userdata('userid');

		//$username = $_SESSION['username'];
       	$data =  array('username' => $username );
		$this->load->view('template/header', $data);
		$this->load->view('admin/open_calls', $data);
		$this->load->view('template/footer', $data);


	}
	public function closed_calls(){
 		$this->load->library('pagination');


            $config = array();
            $config["base_url"] = base_url() . "/";
            $config["total_rows"] = count($getTasks_total);
            $config["per_page"] = 20;
            $config['uri_segment'] = 3; 
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 5;
            $config['cur_tag_open'] = '&nbsp;<a class="current">'; 
            $config['cur_tag_close'] = '</a>';
            $config['next_link'] = 'Next'; 
            $config['prev_link'] = 'Previous';

            $this->pagination->initialize($config);
            $offset = ($flim_page - 1) * $config["per_page"];
            $str_links = $this->pagination->create_links(); 
            $links = explode('&nbsp;',$str_links );
     	$colsed_orders = $this->admin_model->get_colsed_orders();
//      	var_dump($colsed_orders[0]->CaseID);
// exit();
		$username = $this->session->userdata('username');
		$userid = $this->session->userdata('userid');
		//$username = $_SESSION['username'];
       	$data =  array('username' => $username , 'colsed_orders' => $colsed_orders , $links );

		$this->load->view('template/header', $data);
		$this->load->view('admin/close_calls', $data);
		$this->load->view('template/footer', $data);


	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */