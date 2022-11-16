<?php
class Multiple extends CI_Controller{
    public function multi(){
        $this->load->view('multiplefile');
        echo 'hiiii';
    }
}
?>