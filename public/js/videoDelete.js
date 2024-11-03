// let courseImage = document.getElementById("course_image");
// courseImage.onchange = function () {
//    let cImage = document.getElementById("c_image");
//    cImage.src = courseImage.value;
// };



$(document).on('click',".video_delete_button",function(){
   if(confirm("Are you sure want to Delete?")){
      let video_id = $(this).data("id");
      $.ajax({
         url:"http://localhost/mycoaching/videolacture/delete",
         method:"POST",
         data:{id:video_id},
         success:function(e){
           alert('Deleted Successfully!');
         }
      })
   }else{
      alert('Cancelled Successfully!')
   }
})

