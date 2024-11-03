<?php
class DashboardController extends Controller{
    public function index(){
        if($_SESSION['lgndtl'] && isset($_SESSION['lgndtl']))
        {

            $this->load->view('admin/dashboard/index');
        }else{
            header('location:/mycoaching');
        }
    }
}
?>