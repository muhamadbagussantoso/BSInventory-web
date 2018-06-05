<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Goods extends CI_Controller{
    function __construct(){

        parent::__construct();

        $this->auth->cek_auth(); //ngambil auth dari library
        $this->afterAuth = $this->session->userdata('logged_in');

        $getAccount = $this->ModelAuth->ambil_user($this->session->userdata('uname'));
        $this->GetGoods = $this->Goods->getAll();
        
        $this->menu = array('goods' => 'active' ,'procurement' => '','lookup' => '');

        $titleHeader = 'Beranda | BSInventory';
        $this->data = array(    
            'user'    => $getAccount,
            'title' => $titleHeader,
            'modules'=> 'Goods',
            'page' => 'List of Goods',
            'auth' => $this->afterAuth,
            'css' => 'goods.css',
            'menu' => $this->menu,
            );
        // var_dump($this->data);die();
        $this->role = $this->session->userdata('role');

    }

    function index()
    {
        
        if($this->role == 1){

            $this->data += [ "goodsData" => $this->GetGoods ];
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

    function insertGoods()
    {
        if($this->role == 1){
            
            $getData = $this->input->post('ids');

            $data = array(
                          'id'     => $getData[0],
                          'name' =>  $getData[1],
                          'supplier' =>  $getData[2],
                          'category'     => $getData[3],
                          'type' =>  $getData[4],
                          'qty' =>  $getData[5],
                          'unit' =>  $getData[6],
                          'purchase_price'     => $getData[7],
                          'selling_price' =>  $getData[8]
                          );

            if ($getData[0] !="") {
                $this->Goods->editGoods($data);

            }else{

                $this->Goods->insertGoods($data);
            }
        }else{

            $this->load->view('front/User/dashboard_user',$this->data);
        }
    }

    function deleteGoods()
    {
        if($this->role == 1){

             $this->Goods->deleteGoods($this->input->post('id'));

             return true;

        }else{
            $this->load->view('front/User/dashboard_user',$this->data);
        }
    }

    function getDetailGoods()
    {
        header('Content-type: text/javascript');
        $data=  $this->Goods->getAll();

        $json = json_encode(array('data' => $data), JSON_PRETTY_PRINT);

        echo $json;
    }

    function formGoods($id)
    {
        if($this->role == 1 ){

            $method = $this->uri->segment(3);
            $id = $this->uri->segment(4);

            switch ($method) {
                case 'detail' :
                    $this->data += [ "goodsData" => $this->Goods->getGoodsbyId($id) ];
           
                    $this->data += [ "method" => $this->uri->segment(3) ];
                    $this->data += [ "action" => $this->uri->segment(3) ];
                    
                    $replacePage = array("page" => "Detail Goods");
                    $data = array_replace($this->data,$replacePage);

                    $this->template->formGoods('formGoods',$data); 

                  break;
                case 'add' :

                    $goodsData = new stdClass;
                    $objGoodsData = [];

                    $this->data += [ "method" => $this->uri->segment(4) ];
                    $this->data += [ "goodsFields" =>$this->Goods->getFields() ];


                    foreach ($this->data['goodsFields'] as $value) {
                        $a = $goodsData->$value = "";
                        $objGoodsData += [0 =>$goodsData];
                    }

                    $this->data += [ "goodsData" => $objGoodsData ];
                    $this->data += [ "lengthGoodsData" =>count($this->data['goodsData']) ];
                    
                    $replacePage = array("page" => "Add Goods");
                    $data = array_replace($this->data,$replacePage);

                   $this->template->formGoods('formGoods',$data);

                  break;
                default:
                  //what to do if the role is neither 'author' nor 'visitor'?
              }
        }else{

            $this->load->view('front/User/dashboard_user',$this->data);
        }
    }

    function editGoods()
    {

        if($this->role == 1){

            $getData = $this->input->post('id');
            $data = array(
                      'name'     => $getData[0],
                      'supplier' =>  $getData[1],
                      );
            $this->Goods->editGoods($data);

        }else{

            $this->load->view('front/User/dashboard_user',$this->data);
        }
    }

}