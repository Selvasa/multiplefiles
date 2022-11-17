<?php 
class Multiple_M extends CI_Model{

    // insert data into data base
    public function fileinsert($data){
        $this->load->database();
         $this->db->insert_batch("files",$data);
    }

    // get data from data base 
    public function getfile(){
        $this->load->database();
        return $this->db->get('files')->result();
    }
    public function download($id){
        // echo $id."model";
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('files')->result();
    }

}
?>