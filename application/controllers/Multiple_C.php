<?php
class Multiple_C extends CI_Controller{

    public function index(){
        $this->load->view('multiplefile');
    }

    // insert data into data base 
    public function insert(){
    //    $data['name']=$this->input->post('name');
    $config['upload_path']="./assets/image";
    $config['allowed_types']="jpg|png|jpeg|pdf|mp4|txt";
    $config['max_size']=1024*5;

    $this->load->library("upload",$config);
    if($this->upload->do_upload("file")){
        echo"true";
    }
    else{
        echo "false";
    }

    
        // $this->load->model("Multiple_M");
        // $this->Multiple_M->fileinsert($data);
        // redirect("Multiple_C/print");
    }

    // get data from data base  and print value
    public function print(){
        $this->load->model("Multiple_M");
        $value['value']=$this->Multiple_M->getfile();
        $this->load->view('table',$value);
    }

}
?>
