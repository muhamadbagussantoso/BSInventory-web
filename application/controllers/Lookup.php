<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lookup extends CI_Controller{
    function __construct(){
  parent::__construct();

        $this->auth->cek_auth(); //ngambil auth dari library
        $this->afterAuth = $this->session->userdata('logged_in');

        $getAccount = $this->ModelAuth->ambil_user($this->session->userdata('uname'));
        $this->getLookupType = $this->Lookup->getLookupType();
        
        $this->menu = array('goods' => '' ,'procurement' => '','lookup' => 'active');

        $titleHeader = 'Beranda | BSInventory';
        $this->data = array(    
            'user'    => $getAccount,
            'title' => $titleHeader,
            'modules'=> 'Lookup',
            'page' => 'Lookup Value',
            'auth' => $this->afterAuth,
            'css' => 'lookup.css',
            'menu' => $this->menu,
            );

        $this->role = $this->session->userdata('role');

    }

    public function index()
    {

        if($this->role == 1){

            $this->data += [ "lookupData" => $this->getLookupType ];    
            $this->template->lookup('lookup',$this->data);

        }else{ //user

            $this->load->view('front/User/dashboard_user',$this->data);
        }
    }

    public function LookupValue()
    {
        $this->GetModules = $this->Modules->getAll('manage');
        var_dump( $this->GetModules);die();
    }
}