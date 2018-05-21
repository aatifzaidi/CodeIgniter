<?php

class Test extends CI_Controller{
    public function index(){
        $this->load->helper('url'); 
        $this->load->view('test');
        $this->load->model('User_model');
        $this->load->helper('url_helper');
    }
    public function hello(){
        echo "Hello! Hey There function.";
    }

    
}
?>