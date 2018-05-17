<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Goods extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->afterAuth = $this->session->userdata('logged_in');

		$getAccount = $this->ModelAuth->ambil_user($this->session->userdata('uname'));
		$GetGoods = $this->Goods->getAll();

		$titleHeader = 'Beranda | BSInventory';
		$this->data = array(	
			'user'	=> $getAccount,
			'title' => $titleHeader,
			'modules'=> 'Barang',
			'page' => 'Daftar Barang',
			'auth' => $this->afterAuth,
			'goodsData' => $GetGoods,
			'css' => 'goods.css',
			);

		$this->role = $this->session->userdata('role');

	}
	function index()
	{
		if($this->role == 1){
			$this->template->goods('goods',$this->data);
		}else{ //user
			$this->load->view('front/User/dashboard_user',$this->data);
		}
	}

	function detail()
	{
		if($this->role == 1){
			$this->template->goods('goods',$this->data);
		}else{ //user
			$this->load->view('front/User/dashboard_user',$this->data);
		}
	}

}