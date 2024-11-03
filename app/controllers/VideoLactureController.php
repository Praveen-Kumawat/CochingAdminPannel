<?php
class VideoLactureController extends Controller {
    public $videolacture;
    public function __construct()
    {
        parent::__construct();
        $this->videolacture = $this->loadModel('VideoLacture');
        $this->folders = $this->loadModel('folders');
    }
    public function index(){
        if($_SESSION['lgndtl'] && isset($_SESSION['lgndtl']))
        {
            //$folders = $this->folders->all();
            // echo "<pre>";
            // print_r($folders);
            // exit;
            $folder_data = $this->folders->all();
            $this->load->view('offering/folders',compact('folder_data'));
            //$videos = $this->videolacture->all();
            // print_r($videos);
       // $this->load->view('offering/folders',compact('videos','folders'));
        }else{
            header('location:/mycoaching');
        }
    }
    public function newFolder(){
        $folder_info = ['folder_name'=>request('folder_name')];

        if($this->folders->save($folder_info)){
            redirect("videolacture");
        }

        // echo "<pre>";
        // print_r($folder_info);
        // exit;
    }
    public function videos($id)
    {
        $folder_data = $this->folders->all();   
        $folder_videos = $this->folders->hasMany($id);
        $this->load->view('offering/videolacture',compact('folder_videos','folder_data'));
    }
    public function save()
    {
        // echo "<pre>";
        // print_r($_FILES);
        // exit;
        $thumbnail = fileupload('thumbnail','images/thumbnails');
        foreach(request('folder_id') as $folder_id){
            $data = 
                [
                    'folder_id'=>$folder_id,  
                    'title'=>request('title'),
                    'file'=>fileupload('file','videos'),
                    'thumbnail'=>$thumbnail
                ];
            $redirect = $this->videolacture->save($data);
            // echo "<pre>";
            // print_r($redirect);
        }

        if($redirect)
        {
            header('location:'.ROOT."videoLacture");
        }
        
    }
    public function statusChange()
    {
        $status = ['status'=>$_POST['status']];
        // echo "<pre>";
        // print_r($status);
       if ($this->videolacture->update($status,$_POST['data_id']))
       {
            echo $this->videolacture->find($_POST['data_id'])[0]['status'];
       }
    }
    public function delete()
    {
        $this->videolacture->delete(request('id'));
    }
}
?>