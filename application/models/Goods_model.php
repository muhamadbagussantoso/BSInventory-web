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
         var_dump($data);die();
         $this->db->insert('goods', $data);
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

       // var_dump($data);die();
        $this->db->where('id', $data['id']);
        $query = $this->db->update($this->table, $data);

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