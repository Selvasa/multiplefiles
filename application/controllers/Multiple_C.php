<?php
class Multiple_C extends CI_Controller{

    public function index(){
        $this->load->view('multiplefile');
    }

    // insert data into data base 
    public function insert(){

    // file configeration 
    // $data=[];
    $multi[]=count($_FILES['files']['name']);

    for($i=0;$i<$multi;$i++){
        $_FILES['file']['name']=$_FILES['files']['name'][$i];
        $_FILES['file']['type']=$_FILES['files']['type'][$i];
        $_FILES['file']['tmp_name']=$_FILES['files']['tmp_name'][$i];
        $_FILES['file']['error']=$_FILES['files']['error'][$i];
        $_FILES['file']['size']=$_FILES['files']['size'][$i];
       
        $config['upload_path']="./assets/image";
        $config['allowed_types']="jpg|png|jpeg|pdf|mp4|txt";
        $config['max_size']=1024*5;
        $config['file_name']=$_FILES['files']['name'][$i];  
        
        $this->load->library("upload",$config); 
    // get data from data base  and print value
         if($this->upload->do_upload("file")){
            $value=$this->upload->data();

            $data[$i]['file']=$value['file_name'];
            // print_r($data);
            $this->load->model("Multiple_M");
            $this->Multiple_M->fileinsert($data);
            redirect("Multiple_C/print");
        }
        else{
            echo "false";
            } 
    }
     
    }

    // get data from data base  and print value
    public function print(){
        $this->load->model("Multiple_M");
        $value['value']=$this->Multiple_M->getfile();
        $this->load->view('table', $value);
    }
     function download($id){
        $this->load->helper('download');
        $this->load->model("Multiple_M");
        $result =$this->Multiple_M->download($id);
        
        print_r(force_download('./assets/image/'.$result['id'], NULL));
        // $file="./assets/image/".$result["file"];
        // force_download($file, NULL);
        // force_download('./assets/image/'.$result['id'], NULL);

    }

}
?>
