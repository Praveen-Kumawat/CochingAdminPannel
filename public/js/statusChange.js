const url = "http://localhost/mycoaching/";
function statusChange(data_id,path,ele)
{
    // alert(ele);
    $.ajax({
        url:url+path,
        method:"POST",
        data:{status:ele.value,data_id:data_id},
        success:function(e){
            if(e==1)
                {
                    ele.innerHTML="Disable";
                    ele.value = 0;
                    ele.classList.remove('btn-warning');
                    ele.classList.add('btn-light');
                    
                }else{
                    ele.innerHTML="Enable";
                    ele.value=1;
                    ele.classList.remove('btn-light');
                    ele.classList.add('btn-warning');
                }
               
            // location.reload();
            // btn.innerHTML = e;
        }
    })
}