<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->afterAuth = $this->session->userdata('logged_in');
	}
	function index()
	{
		
		$ambil_akun = $this->ModelAuth->ambil_user($this->session->userdata('uname'));

		$titleHeader = 'Beranda | BSInventory';
		$data = array(	
			'user'	=> $ambil_akun,
			'title' => $titleHeader,
			'modules'=> 'Dashboard',
			'page' => '',
			'auth' => $this->afterAuth,
			);

		$role = $this->session->userdata('role');
		if($role == 1){
			$this->template->display('display',$data);
		}else{
			$this->load->view('front/User/dashboard_user',$data);
		}
		
	}
}