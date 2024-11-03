let uploadVideo = document.getElementById('uploadvideo');
let uploadVideoModel = document.getElementById('uploadVideoModel');
let videoModelClose = document.getElementById('videoModelClose');
uploadVideo.addEventListener('click',function(){
    if(uploadVideoModel.style.display=='block'){
    uploadVideoModel.style="display:none";
    }
    else
    uploadVideoModel.style="display:block";
})

videoModelClose.addEventListener('click',function(){
    uploadVideoModel.style.display="none";
})