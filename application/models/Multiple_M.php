<?php 
class Multiple_M extends CI_Model{

    // insert data into data base
    public function fileinsert($data){
        $this->load->database();
         $this->db->insert("fiiles",$data);
    }

    // get data from data base 
    public function getfile(){
        $this->load->database();
        return $this->db->get('fiiles')->result();
    }

}
?>