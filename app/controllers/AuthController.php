<?php
class AuthController extends Controller{
    protected $auth;
    public function __construct(){
        parent::__construct();
        $this->auth = $this->loadModel('admin','id');
    }
    public function index(){
        $this->load->view('admin/auth/auth',[],false);
       
    }
    public function login(){
        print_r(request());
        if(request('username') && request('password')){
            $lgndtl= $this->auth->all()[0];
            if($lgndtl['name']==request('username'))
            {
                if($lgndtl['password']==request('password'))
                {
                    Session::set('lgndtl',$lgndtl);
                    redirect('dashboard');
                    echo 1;
                }else{
                    echo 0;
                }
            }else
            {
                echo 2;
            }
            
        }else{
            echo "enter username and Password!";
        }           
    }
    public function Destroy(){
        Session::destroy();
        header('location:/mycoaching');
    }
}

?>