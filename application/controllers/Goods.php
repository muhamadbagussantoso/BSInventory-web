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
            'user'    => $getAccount,
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

    function insertGood()
    {
        if($this->role == 1){
            
            $getData = $this->input->post('ids');
            $data = array(
                      'name'     => $getData[0],
                      'supplier' =>  $getData[1],
                      );
            $this->Goods->insertGoods($data);

        }else{
            $this->load->view('front/User/dashboard_user',$this->data);
        }
    }

    function deleteGood()
    {
    	if($this->role == 1){
            
            $this->Goods->deleteGoods($data);

        }else{
            $this->load->view('front/User/dashboard_user',$this->data);
        }
    }
    function getDetailGoods(){

           $data=  $this->Goods->getAll();

           $json = json_encode(array('data' => $data), JSON_PRETTY_PRINT);
           header('Content-type: text/javascript');

           echo $json;
    }

}