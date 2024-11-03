<?php
class SlidesController extends Controller
{
    protected $slides;
    public function __construct()
    {
        parent:: __construct();
        $this->slides = $this->loadModel('slides');
    }
    public function index()
    {
        $data = $this->slides->all();
        $this->load->view('marketing/slides',compact('data'));
    }
    public function save()
    {
        $data = [
            "title"=>request('title'),
            "slide_image"=> fileupload('slide_image','images/slides'),
            "sorting_order"=>request('sorting_order')
        ];
        if($this->slides->save($data))
        {
            header('location:'.ROOT.'slides');
        }
        
    }
    public function edit($id)
    {
        $info = $this->slides->find($id)[0];
        $this->load->view('marketing/editSlides',compact('info'));
    }
    public function update($id)
    {
        $info = [
            'title'=>request('title'),
            'slide_image'=>fileupload('slide_image','images/slides'),
            'sorting_order'=>request('sorting_order')
        ];

       if($this->slides->update($info,$id)){
            header('location:'.ROOT.'slides');
       }
    }
    public function delete()
    {
        $id  = $_POST['id'];
        $this->slides->delete($id);
            
        

    }
}
?>