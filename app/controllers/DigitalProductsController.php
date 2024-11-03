<?php
class DigitalProductsController extends Controller{
    protected $courses,$category,$course_data;
    public function __construct(){
        parent:: __construct();
        $this->courses = $this->loadModel('courses');
        $this->category = $this->loadModel('category');
    }    
    public function index(){

        if($_SESSION['lgndtl'] && isset($_SESSION['lgndtl']))
        {
            $cat_data = $this->category->all();
           $this->course_data = $course_data = $this->courses->hasOne();
            // echo "<pre>";
            // print_r($course_data);
            $this->load->view('offering/digitalproduct',compact('course_data','cat_data'));
        }else{
            header('location:/mycoaching');
        }
}
    public function showCourse($id)
    {
        $a=[];
        $course_data = $this->courses->hasOne();
        foreach($course_data as $info)
        {
            if($info['cat_id']==$id){
            array_push($a,$info);
        }
    }
    // echo "<pre>";
    // print_r($a);
    //     exit;
    $this->load->view('offering/courselist',compact('a'));
    
    
    }
    public function save(){
        $data = request('category');
        foreach($data as $key=> $info ){
                $data=[
                    'course'=>request('course'),
                    'selling_price'=>request('selling_price'),
                    'mrp'=>request('mrp'),
                    'start_date'=>request('start_date'),
                    'end_date'=>request('end_date'),
                    'course_image'=>$filename = ($key==0)?fileupload('course_image',"images/courses"):"$filename",
                    'cat_id'=>$info,
                ];   
                // echo "<pre>";
                // print_r($data);
                
                $res = $this->courses->save($data);
            }
               
            if($res){
                redirect('digitalproducts');
            }
    }
    public function edit($id){
        $info = $this->courses->find($id)[0];
        $this->load->view('offering/CoursesEdit',$info);
    }
    public function update($id){

        $data=[
            'course'=>request('course'),
            'selling_price'=>request('selling_price'),
            'mrp'=>request('mrp'),
            'start_date'=>request('start_date'),
            'end_date'=>request('end_date'),
            'course_image'=>fileupload('course_image',"images/courses")
        ];  
        if($this->courses->update($data,$id))
        {
            header("location:".ROOT."digitalproducts");
        }

    }
    public function delete(){
        if($this->courses->delete(request('id'))){
            header("location:".ROOT."digitalproducts");
        }
     }
}
?>