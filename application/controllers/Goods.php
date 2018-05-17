<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Goods extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->afterAuth = $this->session->userdata('logged_in');
	}
	function index()
	{
		
		$getAccount = $this->ModelAuth->ambil_user($this->session->userdata('uname'));
		$GetGoods = $this->Goods->getAll();

		$titleHeader = 'Beranda | BSInventory';
		$data = array(	
			'user'	=> $getAccount,
			'title' => $titleHeader,
			'modules'=> 'Barang',
			'page' => 'Daftar Barang',
			'auth' => $this->afterAuth,
			'goodsData' => $GetGoods,
			'css' => 'goods.css',
			);

		$role = $this->session->userdata('role');
		//var_dump($data);die();
		if($role == 1){//admin
			$this->template->goods('goods',$data);
		}else{ //user
			$this->load->view('front/User/dashboard_user',$data);
		}
		
	}
}