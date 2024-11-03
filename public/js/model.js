let pdfobject = document.getElementById('pdfobject');
function model(id,data_id,data_path)
{   
    let path = "http://localhost/mycoaching/"+data_path;
    if(data_id && data_path)
        {
            // console.log(data_id);
            $.ajax({
                url:path,
                method:"POST",
                data:{id:data_id},
                success:function(e){
                    if(pdfobject.id=='pdfobject')
                        {
                            pdfobject.setAttribute('data','http://localhost/mycoaching/public/docs/timetable/'+e)
                        }
                }
            })
        }
    let ele = document.getElementById(id);

    if(ele.style.display=='block'){
        ele.style="display:none";
    }
    else
    ele.style="display:block";
}

function modelClose(id)
{
    let ele = document.getElementById(id);
    ele.style.display="none";
}