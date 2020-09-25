<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//we need to start login session in order to access it through CI
// session_start();

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/login
	 *	- or -
	 * 		http://example.com/index.php/login/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/login/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){

		if($this->session->userdata('user_id'))
			$this->load->view('dashboard');

		$this->load->view('login');
	}

	//get Listing Data using curl
	public function getUserData(){

		// Check validation for user input in SignUp form
		// $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		// $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[5]');

		// if ($this->form_validation->run() == FALSE) {
		// 	$this->load->view('login');
		// }else{}

		$url = 'https://softonauts.com/clients/Android/users-login';

		$data = array(
			'username' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'fcm_id' => "",
		);

		// $postvars = 'username=JohnKHester@jourrapide.com&password=Password1&fcm_id=""';
		$postvars = 'username='.$data['username'].'&password='.$data['password'].'&fcm_id='.$data['fcm_id'];

		$crl = curl_init();
		$header[] = "Authorization:eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM";

		curl_setopt($crl, CURLOPT_HTTPHEADER, $header);
		curl_setopt($crl,CURLOPT_URL,$url);
		curl_setopt($crl,CURLOPT_POSTFIELDS,$postvars);
		curl_setopt($crl,CURLOPT_RETURNTRANSFER, true);

		$rest = curl_exec($crl);

		$res = json_decode($rest,true);
		$msg = $res['message'];
		$code = $res['code'];
		$data = $res['data'];

		if($code == 200){

			$user_id = $data['id'];
			$this->session->set_userdata('user_id',$user_id);

			$this->load->view('dashboard');

		}else{
			$this->load->view('login');
		}


		// if($msg == 'success'){
		//
		// 	$data = $res['data'];
		// 	$user_id = $data['id'];
		//
		// 	$this->session->set_userdata('user_id',$user_id);
		// 	$validation_message = "Validation Successful";
		//
		// 	$this->load->view('dashboard');
		// }else{
		//
		// 	$validation_message = "Authentication failed.Invalid Username/Password.";
		// 	$this->session->set_flashdata('login_validation',$validation_message);
		//
		// 	$this->load->view('login');
		//
		// }

	}

		public function kit_request(){
			$this->load->view('kit_request');
		}


		public function user_signout(){
		 $this->session->unset_userdata('user_id');
		 return redirect('index.php/login');
	 }









}
