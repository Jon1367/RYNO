<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	 public function __construct()
	 {
	    parent::__construct();
	    $this->load->helper('url');
	   	$this->load->model('admin_model');
	   	$this->load->library('form_validation');
	   	$this->load->library('session');
        $this->load->library('table');

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
	public function closed_calls($page = 1){
 		$this->load->library('pagination');


			$username = $this->session->userdata('username');
			$userid = $this->session->userdata('userid');
			$get_order_total = $this->admin_model->get_total_tech_record($userid,'Closed');
			$num_total = (int)$get_order_total[0]->Total;
			$url_num = $this->uri->segment(3);
			//$page = $url_num;
            $config = array();
            $config["base_url"] = base_url() . "/index.php/welcome/closed_calls/";
            $config["total_rows"] = $num_total;
            $config["per_page"] = 20;
            $config['uri_segment'] = 3;
            $config['use_page_numbers'] = True;
            $config['num_links'] = 3;
            $config['cur_tag_open'] = '&nbsp;<a class="current">'; 
            $config['cur_tag_close'] = '</a>';
            $config['next_link'] = 'Next'; 
            $config['prev_link'] = 'Previous';

            $this->pagination->initialize($config);
            $offset = ((int)$page - 1) * $config["per_page"];
            $str_links = $this->pagination->create_links(); 
            $links = explode('&nbsp;',$str_links );
     		$colsed_orders = $this->admin_model->get_tech_orders($userid,'Closed',$config["per_page"],$offset);


       	$data =  array('username' => $username , 'colsed_orders' => $colsed_orders , 'links' => $links );

		$this->load->view('template/header', $data);
		$this->load->view('admin/close_calls', $data);
		$this->load->view('template/footer', $data);


	}
	public function open_calls($page = 1){
 		$this->load->library('pagination');

			$username = $this->session->userdata('username');
			$userid = $this->session->userdata('userid');
			$get_order_total = $this->admin_model->get_total_tech_record($userid,'Open');
			$num_total = (int)$get_order_total[0]->Total;
			$url_num = $this->uri->segment(3);
			//$page = $url_num;
            $config = array();
            $config["base_url"] = base_url() . "/index.php/welcome/open_calls/";
            $config["total_rows"] = $num_total;
            $config["per_page"] = 20;
            $config['uri_segment'] = 3;
            $config['use_page_numbers'] = True;
            $config['num_links'] = 3;
            $config['cur_tag_open'] = '&nbsp;<a class="current">'; 
            $config['cur_tag_close'] = '</a>';
            $config['next_link'] = 'Next'; 
            $config['prev_link'] = 'Previous';

            $this->pagination->initialize($config);
            $offset = ((int)$page - 1) * $config["per_page"];
            $str_links = $this->pagination->create_links(); 
            $links = explode('&nbsp;',$str_links );
     		$colsed_orders = $this->admin_model->get_tech_orders($userid,'Open',$config["per_page"],$offset);


       	$data =  array('username' => $username , 'colsed_orders' => $colsed_orders , 'links' => $links );

		$this->load->view('template/header', $data);
		$this->load->view('admin/open_calls', $data);
		$this->load->view('template/footer', $data);


	}
	public function view_order_details($caseID){


		$username = $this->session->userdata('username');
		$userid = $this->session->userdata('userid');


     	$order_detials = $this->admin_model->get_order_details($caseID,'Closed');


       	$data =  array('username' => $username , 'order_details' => $order_detials );
		$this->load->view('template/header', $data);
		$this->load->view('admin/view_order_details', $data);
		$this->load->view('template/footer', $data);


	}
	public function view_open_details($caseID){

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ($this->form_validation->run()) {

            $timeIn = $this->input->post('timeIn');
            $timeOut = $this->input->post('timeout');
            $miles = $this->input->post('miles');
            $expenses = $this->input->post('expenses');
            $login_with = $this->input->post('login_with');
            $logout_with = $this->input->post('logout_with');
            $supported = $this->input->post('supported');
            $work_notes = $this->input->post('work_notes');
            $orange_num = $this->input->post('orange_num');
            $parts = $this->input->post('parts');
            $tracking = $this->input->post('tracking');
            $date = $this->input->post('date');
  
            $data = array(
            	'TimeIn' => $timeIn,
            	'TimeOut' => $timeOut, 
            	'MilesTraveled' => $miles, 
            	'MileageCost' => $expenses, 
            	// 'MileageCost' => $loggin_withh, 
            	// 'MileageCost' => $logout_withh, 
            	// 'TimeIn' => $supported, 
            	// 'WorkOrder' => $work_notes,
            	// 'TimeIn' => $orange_num, 
            	// 'TimeIn' => $parts, 
            	// 'TimeIn' => $tracking, 
            	'dateship' => $date
            );

     	$order_detials = $this->admin_model->update_order($caseID,$data);


        }

		$username = $this->session->userdata('username');
		$userid = $this->session->userdata('userid');


     	$order_detials = $this->admin_model->get_order_details($caseID,'Open');


       	$data =  array('username' => $username , 'order_details' => $order_detials );
		$this->load->view('template/header', $data);
		$this->load->view('admin/view_open_details', $data);
		$this->load->view('template/footer', $data);


	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */