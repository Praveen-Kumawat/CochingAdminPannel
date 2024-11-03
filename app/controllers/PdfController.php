<?php
class PdfController extends Controller{
    protected $timetable,$docs,$res;
    public function __construct()
    {
        parent::__construct();
        $this->timetable = $this->loadModel('timetable');
        $this->docs = $this->loadModel('docs');
        $this->res = $this->loadModel('results');
    }
    public function index()
    {
        if($_SESSION['lgndtl'] && isset($_SESSION['lgndtl']))
        {
            $data = $this->timetable->all();
            $docs_data = $this->docs->all();
            $res_data = $this->res->all();
        
            $this->load->view('offering/pdfs',compact('data','docs_data','res_data',));
        }
        else
        {
        header('location:/mycoaching');
        }
    }
    public function xyz()
    {
        $pdfview = $this->timetable->find(request('id')); 
        echo $pdfview[0]['file'];
        
    }
    public function save()
    {
        if($_SESSION['lgndtl'] && isset($_SESSION['lgndtl']))
        {
            if(request('category')=="T")
            {
                // $timetable = $this->loadModel('timetable');
                $data = ['title'=>request('title'),'file'=>fileupload('file','docs/timetable')];
                if($this->timetable->save($data))
                {
                    redirect('pdf');
                }else{
                    echo "Something Went Wrong!";
                }
            }
            else if(request('category')=="D")
            {
                // Docs model 

                $data = ['title'=>request('title'),'file'=>fileupload('file','docs')];
                if($this->docs->save($data))
                {
                    redirect('pdf');
                }else{
                    echo "Something Went Wrong!";
                }
            }
            else{
                // results model 
                $data = ['title'=>request('title'),'file'=>fileupload('file','docs/results')];
                if($this->res->save($data))
                {
                    redirect('pdf');
                }else{
                    echo "Something Went Wrong!";
                }
            }
        }
        else
        {
            header('location:/mycoaching');
        }
    }
    public function statusChange($id)
    {
        // echo $_POST['id'];
        // echo $_POST['status'];
        // echo $_POST['data_id'];
        $status = ['status'=>$_POST['status']];
        // echo "<pre>";
        // print_r($status);
       if ($this->timetable->update($status,$_POST['data_id']))
       {
            echo $this->timetable->find($_POST['data_id'])[0]['status'];
       };
    }
    public function delete()
    {
        if($this->timetable->delete($_POST['id']))
        {
            echo "Deleted Successfully!";
        }
    }
}
?>