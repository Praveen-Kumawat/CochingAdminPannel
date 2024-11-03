<?php
class CategoryController extends Controller{
    protected $category;
    public function __construct()
    {
        parent:: __construct();
        $this->category = $this->loadModel('category');
    }
    public function index()
    {
        $data = $this->category->all();
        // print_r($data);
        // exit;
        $this->load->view('digitalproducts',compact('data'));
    }
    public function save()
    {
        $data = ["category"=>request('category'),"description"=>request('description'),'thumbnail'=>fileupload('thumbnail','images/thumbnails')];
        
        if($this->category->save($data))
            redirect("category");
    }
    public function edit($id)
    {
        echo $id;
    }
    public function delete()
    {
        if($this->category->delete($_POST['id'])){
            redirect("category");
        }
    }
}
?>