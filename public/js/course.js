$("#category").select2();
 $('#category').select2({
   placeholder: 'Select Category For Course',
   allowClear: true,
   width:"100%",
   borederRadius:"1px",
 });
// let courseImage = document.getElementById("course_image");
// courseImage.onchange = function () {
//    let cImage = document.getElementById("c_image");
//    cImage.src = courseImage.value;
// };
// $(document).on('click',".course_delete_button",function(){
//    if(confirm("are you sure")){
//       let course_id = $(this).data("id");
//       $.ajax({
//          url:"http://localhost/mycoaching/digitalproducts/delete",
//          method:"POST",
//          data:{id:course_id},
//          success:function(e){
//             alert(e)
//             //   alert('Deleted Successfully!');
//          }
//       })
//    }else{
//       alert('Cancelled Successfully!')
//    }
// })


// course Model 

let uploadCourse = document.getElementById('uploadCourse');
let courseModel = document.getElementById('courseModel');
let courseModelClose = document.getElementById('courseModelClose');
uploadCourse.addEventListener('click',function(){
   console.log(courseModel);
    if(courseModel.style.display=='block'){
      courseModel.style="display:none";
    }
    else
    courseModel.style="display:block";
})

courseModelClose.addEventListener('click',function(){
   courseModel.style.display="none";
})


// category Model


let uploadCategory = document.getElementById('uploadCategory');
let categoryModel = document.getElementById('categoryModel');
let categoryModelClose = document.getElementById('categoryModelClose');
uploadCategory.addEventListener('click',function(){
   console.log("click huaa");
    if(categoryModel.style.display=='block'){
      categoryModel.style="display:none";
    }
    else
    categoryModel.style="display:block";
})

categoryModelClose.addEventListener('click',function(){
   categoryModel.style.display="none";
})















// function deleteItem(del_id) {
//     $(document).ready(function () {
//       $(`#deleteBtn${del_id}`).submit(function (e) {
//         e.preventDefault();
//         var form = document.getElementById(`deleteBtn${del_id}`);
//         var formData = new FormData(form);
//         console.log(del_id);
//         $.ajax({
//           url: "http://localhost/mycoaching/digitalproducts/delete",
//           method: "POST",
//           data: formData,
//           success: function (e) {
//             alert(e);
//           },
//         });
//       });
//     });

// }
