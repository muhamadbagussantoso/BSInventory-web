<?php 
class Modules_model extends CI_Model {

    public $title;
    public $content;
    public $date;

    function __construct()
    {

        parent::__construct();
        $this->table = "sys_modules";
    }
 
   
    public function getAll ()
    {

        header('Content-type: text/javascript');
        $this->db->select('module_code, status');
        $query = $this->db->get($this->table);


        $json = json_encode($query->result(), JSON_PRETTY_PRINT);

        return $json;

    }

    public function getFields()
    {
        $result = $this->db->list_fields($this->table);

        return $result;
    }

}
?>