<?php
class BooksController extends Controller{
    public function index(){
        if($_SESSION['lgndtl'] && isset($_SESSION['lgndtl']))
        {
        $this->load->view('offering/books');
        // print_r($_SESSION);
        }else{
            header('location:/mycoaching');
        }
    }
    public function save(){
        print_r(request('book_price'));
    }
}

?>