<?php
class SettingController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->admin = $this->loadModel('admin');
    }
    public function index()
    {
        $this->load->view('settings/setting');
    }
    public function resetPassword()
    {
       $adminData =  $this->admin->all();
       $this->load->view('settings/resetPassword',compact('adminData'));
    }
}
?>