<?php 
class Goods_model extends CI_Model {

    public $title;
    public $content;
    public $date;

    function __construct()
    {
        parent::__construct();
        $this->table = "goods";
    }
 
   
    public function getAll ()
    {

        $query = $this->db->get($this->table);
        return $query->result();

    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    public function insert_entry()
    {
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->insert('entries', $this);
    }

    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    public function saveGoods ($data)   
    {
        if ($data != null){
        $sql ="INSERT INTO {$this->table} (name) values('{$data["name"]}')";
        // var_dump($sql);die();
        $query = $this->db->query($sql) ;
        }
    }


}
?>