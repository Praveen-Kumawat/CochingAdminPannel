<?php
class VideoPlayController extends Controller{
    public $videolacture;
    public function __construct()
    {
        parent::__construct();
        $this->videolacture = $this->loadModel('videolacture');
    }
    public function play($id){
        $info = $this->videolacture->find($id);
        $this->load->view('offering/player',compact('info'));
    }
}

?>