<?php

class Template 
	{
		 protected $_ci;
		 function __construct()
		 {
			$this->_ci = &get_instance();
			$this->dirLoad = array('public','templates','front','admin','user','attendance','staff');
		    $this->fileTemplates = array('header','navbar','body','footer');
			$this->adminTemplate = 'front/admin/templates';
			$this->userTemplate = 'front/user/templates';
			$this->subdirLoad = array('Staff','view','Position','Request');
			$this->adminDir = 'front/admin';
		 }
		 
		function display($templates,$data = null)
		{
		   for ($i = 0; $i <= 3; $i++){
				$this->data = $data[$this->fileTemplates[$i]] = $this->_ci->load->view($this->adminTemplate."/".$this->fileTemplates[$i],$data,true);
				};

		   $data['contens']		= $this->_ci->load->view('front/admin/dashboard_admin',$data,true);
		   
		   $this->_ci->load->view('index',$data);
		}
		
		
	}
?>