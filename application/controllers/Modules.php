<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modules extends CI_Controller{
    function __construct(){

        parent::__construct();

        $this->auth->cek_auth(); //ngambil auth dari library
        $this->afterAuth = $this->session->userdata('logged_in');

        $getAccount = $this->ModelAuth->ambil_user($this->session->userdata('uname'));
        $this->role = $this->session->userdata('role');

    }

    public function getModules()
    {
        $this->GetModules = $this->Modules->getAll('manage');
        var_dump( $this->GetModules);die();
    }
}