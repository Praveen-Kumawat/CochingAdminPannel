function Deleted(id,path,msg){
    let link_path = "http://localhost/mycoaching/"+path+"/delete";
        if(confirm("are you sure")){
            $.ajax({
               url:link_path,
               method:"POST",
               data:{id:id},
               success:function(e){
                  return e;
               }
            })
         }else{
            alert('Cancelled Successfully!')
         }
}