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

    public function insertGoods($data)
    {
         $this->db->insert('goods', $data);
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
    public function getGoodsbyId($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id), 1);
        
        return  $query->result();

    }

    public function deleteGoods($id)
    {
        $query = $this->db->delete($this->table, array('id' => $id)); 
      
        if ($query){
                 return "success";
        }else{
                 return "failed";
        }
    }

    public function editGoods($data)
    {
        var_dump($data);die();
        $query = $this->db->delete($this->table, array('id' => $id)); 
      

        $this->name    = $data['name'];
        $this->supplier  =$data['supplier'];

        $query = $this->db->update($this->table, $this, array('id' => $_POST['id']));

        if ($query){
                 return "success";
        }else{
                 return "failed";
        }
    }

    public function getFields()
    {
        $result = $this->db->list_fields($this->table);

        return $result;
    }

}
?>