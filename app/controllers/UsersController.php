<?php
class UsersController extends Controller{
    public $Users;
    public function __construct()
    {
        parent::__construct();
        $this->Users = $this->loadModel('users');
    }

    public function index()
    {
        $userData = $this->Users->all();
        $this->load->view('reporting/users',compact('userData'));
    }
}
?>