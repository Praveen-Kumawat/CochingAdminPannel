<?php
class HomeController extends Controller{
    public function index(){
        $this->load->view("home");
    }
}
?>