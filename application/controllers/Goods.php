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
			'goods' => 'active',
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
			$this->template->goodsDetail('goodsDetail',$this->data);
		}else{ //user
			$this->load->view('front/User/dashboard_user',$this->data);
		}
	}

	function saveGood (){
		if($this->role == 1){
			
				// $header = $this->input->post('header');
				$header['name'] = $_POST['name'];
				alert($header);die();
					// allFields = $( [] ).add( name ).add( supplier ).add( category ).add( qty ).add( price ).add( price1 );
				// 
				$saveHeaderStaff = $this->Goods->saveGoods($header);
				redirect('index.php/Position/position');
			
		}else{
			$this->load->view('front/User/dashboard_user',$this->data);
		}
	}

}