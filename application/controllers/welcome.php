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
    		// $type= $this->input->post('type');

     		$login_check = $this->admin_model->admin_login($username,$password);

     		if($login_check != Null){
			//$this->load->library('Session/session');
			//session_start(); 
            	$this->session->set_userdata('username', $login_check->FE_Name);
            	$this->session->set_userdata('userid', $login_check->FEID);

            	if($login_check->typ == 't3chn1cian'){
	            	redirect(base_url('index.php/welcome/home/'));
            	}else if($login_check->typ == 'd15patc4'){
	            	redirect(base_url('index.php/welcome/accountent_home/'));
            	}

     		}else{

            	redirect(base_url('/'));

     		}

		}
		$this->load->view('welcome_message');
	}
	public function accountent_home($page = 1){

			$this->load->library('pagination');

			$username = $this->session->userdata('username');
			$userid = $this->session->userdata('userid');

			$this->load->library('pagination');
			$username = $this->session->userdata('username');
			$userid = $this->session->userdata('userid');
			$get_order_total = $this->admin_model->get_messages_total();
			$num_total = (int)$get_order_total[0]->Total;
			$url_num = $this->uri->segment(3);
			//$page = $url_num;
            $config = array();
            $config["base_url"] = base_url() . "/index.php/welcome/home/";
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
     		$messages = $this->admin_model->get_messageBoard_messages();
       	    $data =  array('username' => $username , 'messages' => $messages , 'links' => $links );

			$this->load->view('template/accountent_header', $data);
			$this->load->view('admin/dashboard_home', $data);
			$this->load->view('template/footer', $data);


	}
	public function home($page = 1){

			$this->load->library('pagination');

			$username = $this->session->userdata('username');
			$userid = $this->session->userdata('userid');

			$this->load->library('pagination');
			$username = $this->session->userdata('username');
			$userid = $this->session->userdata('userid');
			$get_order_total = $this->admin_model->get_messages_total();
			$num_total = (int)$get_order_total[0]->Total;
			$url_num = $this->uri->segment(3);
			//$page = $url_num;
            $config = array();
            $config["base_url"] = base_url() . "/index.php/welcome/home/";
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
     		$messages = $this->admin_model->get_messageBoard_messages();
       	    $data =  array('username' => $username , 'messages' => $messages , 'links' => $links );

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
		$get_order_total = $this->admin_model->get_total_tech_record($userid,'Open');
     	$order_detials = $this->admin_model->get_order_details($caseID,'Closed');
       	$data =  array('username' => $username , 'order_details' => $order_detials );
		$this->load->view('template/header', $data);
		$this->load->view('admin/view_order_details', $data);
		$this->load->view('template/footer', $data);

	}
	public function view_open_details($caseID){

    $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    
   if ($this->input->server('REQUEST_METHOD') === 'POST') {

            $timeIn = $this->input->post('timeIn');
            $timeOut = $this->input->post('timeOut');
            $miles = $this->input->post('miles');
            $expenses = $this->input->post('expenses');
            $login_with = $this->input->post('login_with');
            $logout_with = $this->input->post('logout_with');
            // $supported = $this->input->post('supported');
            // $work_notes = $this->input->post('work_notes');
            // $orange_num = $this->input->post('orange_num');
            $parts = $this->input->post('parts');
            $tracking = $this->input->post('tracking');
            $date = $this->input->post('date');
  

            $data = array(
            	'FE_Notes' => 'Open',
            	'TimeIn' => $timeIn,
            	'TimeOut' => $timeOut, 
            	'MilesTraveled' => $miles, 
            	'MileageCost' => $expenses,
            	// 'loggin_with' => $loggin_with, 
            	// 'MileageCost' => $logout_with
            	// 'TimeIn' => $supported, 
            	// 'WorkOrder' => $work_notes,
            	// 'TimeIn' => $orange_num, 
            	// 'TimeIn' => $parts, 
            	// 'Tracking' => $tracking, 
            	'dateship' => $date
            );

     	 echo $order_details = $this->admin_model->update_order($caseID,$data);
      }

		$username = $this->session->userdata('username');
		$userid = $this->session->userdata('userid');
     	$order_detials = $this->admin_model->get_order_details($caseID,'Open');
       	$data =  array('username' => $username , 'order_details' => $order_detials);
		$this->load->view('template/header', $data);
		$this->load->view('admin/view_open_details', $data);
		$this->load->view('template/footer', $data);


	}
		public function tech_payments($page = 1){

			$this->load->library('pagination');
			$username = $this->session->userdata('username');
			$userid = $this->session->userdata('userid');
			$get_order_total = $this->admin_model->get_total_tech_record($userid,'Closed');
			$num_total = (int)$get_order_total[0]->Total;
			$url_num = $this->uri->segment(3);
			//$page = $url_num;
            $config = array();
            $config["base_url"] = base_url() . "/index.php/welcome/tech_payments/";
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
			$this->load->view('admin/tech_payments', $data);
			$this->load->view('template/footer', $data);

	}
		public function create_calls($page = 1){

     		$vendors = $this->admin_model->get_vendors();
     		$techs = $this->admin_model->get_techs();
			$username = $this->session->userdata('username');
			$userid = $this->session->userdata('userid');
            $reord_create = false;
		   if ($this->input->server('REQUEST_METHOD') === 'POST') {

            $vendor = $this->input->post('vendor');
            $caseID = $this->input->post('caseID');
            $appDate = $this->input->post('appDate');
            $appTime = $this->input->post('appTime');
            $tech = $this->input->post('tech');
            $payment_code = $this->input->post('payment_code');
            $company_name = $this->input->post('company_name');
            $adress = $this->input->post('adress');
            $add_info = $this->input->post('add_info');
            $city = $this->input->post('city');
            $zip_code = $this->input->post('zip_code');
            $state = $this->input->post('state');
            $job_description = $this->input->post('job_description');
            $extra_notes = $this->input->post('extra_notes');
            $auth_travel = $this->input->post('auth_travel');
            $material_cost = $this->input->post('material_cost');
            $other_expense = $this->input->post('other_expense');

            $data = array(
            	'Vendor' => $vendor, 
            	'CaseID' => $caseID, 
            	'ApptDate' => $appDate, 
            	'ApptTime' => $appTime, 
            	'FEID' => $tech, 
            	'PaymentCode' => $payment_code,
                'cust1' => $company_name,
            	'cust2' => $adress, 
            	'cust3' => $add_info, 
            	'cust4' => $city ,
                'cust5' => $state, 
            	'cust6' => $zip_code, 
            	'JobDescription' => $job_description, 
            	'xtr' => $extra_notes, 
            	'auth_travel' => $auth_travel, 
            	'material_cost' => $material_cost, 
            	'other_expense' => $other_expense

            );
             $insert = $this->admin_model->insert_data('Service_Records',$data);
             if($insert){
                $reord_create = true;
             }else{
                $reord_create = false;
             }

		   }


       	    $data =  array('username' => $username , 'vendors' => $vendors , 'techs' => $techs);

			$this->load->view('template/accountent_header', $data);
			$this->load->view('admin/create_calls', $data);
			$this->load->view('template/footer', $data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */