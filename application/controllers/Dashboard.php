<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->afterAuth = $this->session->userdata('logged_in');

		$getAccount = $this->ModelAuth->ambil_user($this->session->userdata('uname'));
		$GetGoods = $this->Goods->getAll();

        
        $this->menu = array('goods' => '' ,'procurement' => '','lookup' => '');
		$titleHeader = 'Beranda | BSInventory';
		$this->data = array(	
			'user'	=> $getAccount,
			'title' => $titleHeader,
			'modules'=> 'Dashboard',
			'page' => '',
			'auth' => $this->afterAuth,
			'css' => 'goods.css',
			'menu' => $this->menu,
			);

		$this->role = $this->session->userdata('role');
	}
	function index()
	{

		$role = $this->session->userdata('role');
		if($role == 1){
			$this->template->display('display',$this->data);
		}else{
			$this->load->view('front/User/dashboard_user',$this->data);
		}
		
	}
}