<?php
class QuicklinksController extends Controller
{
    public $quicklinks;
    public function __construct()
    {
        parent::__construct();
        $this->quicklinks = $this->loadModel('quicklinks');
    }
    public function index()
    {
        $links = $this->quicklinks->all();
        $this->load->view('marketing/quickLinks',compact('links'));
    }
    public function save()
    {
        $link = [
            'title'=>request('title'),
            'link'=>request('link'),
            'thumbnail'=>fileupload('thumbnail',"images/thumbnails/quicklinks")
        ];
        if($this->quicklinks->save($link))
            header('location:'.ROOT.'quicklinks');
        // echo "<pre>";
        // print_r($link);
    }
    public function edit($id)
    {
        $linkinfo = $this->quicklinks->find($id)[0];
        // echo "<pre>";
        // print_r($linkinfo);
        // exit;
        $this->load->view('marketing/editQuickLinks',compact('linkinfo'));
    }
    public function update($id)
    {
        $info = [
            'title'=>request('title'),
            'link'=>request('link'),
            'thumbnail'=>fileupload('thumbnail','images/thumbnails/quicklinks')
        ];
        if($this->quicklinks->update($info,$id))
        {
            header('location:'.ROOT."quicklinks");
        }
    }
    public function delete()
    {   
        $id = $_POST['id'];
        if($this->quicklinks->delete($id)){
            header('location:'.ROOT."quicklinks");
        }
    }
}
?>