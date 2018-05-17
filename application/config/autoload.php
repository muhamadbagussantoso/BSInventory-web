<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database','session','auth','template');
$autoload['helper'] = array('url','form','file','html');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('auth_model' => 'ModelAuth', 'goods_model' => 'Goods');
