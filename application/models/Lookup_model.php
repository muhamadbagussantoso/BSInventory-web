<?php 
class Lookup_model extends CI_Model {

    public $title;
    public $content;
    public $date;

    function __construct()
    {

        parent::__construct();
        $this->a = "sys_lookup_types";
        $this->b = "sys_lookup_values";
    }

    public function getLookupValue()
    {

    	$query = $this->db->get($this->a);
        $json = json_encode(array('data' => $query->result()), JSON_PRETTY_PRINT);


        return $json;
    }
}
?>