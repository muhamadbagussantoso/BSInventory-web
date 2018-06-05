<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Procurement extends CI_Controller{
    function __construct(){

        parent::__construct();

        $this->auth->cek_auth(); //ngambil auth dari library
        $this->afterAuth = $this->session->userdata('logged_in');

        $getAccount = $this->ModelAuth->ambil_user($this->session->userdata('uname'));
        $this->GetGoods = $this->Goods->getAll();

        $this->menu = array('goods' => '' ,'procurement' => 'active','lookup' => '');

        $titleHeader = 'Beranda | BSInventory';
        $this->data = array(    
            'user'    => $getAccount,
            'title' => $titleHeader,
            'modules'=> 'Procurement',
            'page' => 'Procurement of Goods',
            'auth' => $this->afterAuth,
            'css' => 'procurement.css',
            'menu' => $this->menu,
            );

        $this->role = $this->session->userdata('role');

    }

    function index()
    {
        
        if($this->role == 1){
 
            $this->template->procurement('procurement',$this->data);

        }else{ //user

            $this->load->view('front/User/dashboard_user',$this->data);
        }
    }

}