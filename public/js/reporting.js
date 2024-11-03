let imgPath2 = "http://localhost/mycoaching/public/images/";
let reporting = document.getElementById('reporting');
let reportingUL = document.getElementById('reportingUL');
let downArrow2 = document.getElementById('downarrow2');
reporting.addEventListener('click',function(){
    if(reportingUL.style.display=='block'){
        reportingUL.style.display="none"
        downArrow2.src=imgPath2+"icon/right.png";
    }else{
        reportingUL.style.display="block";
        downArrow2.src=imgPath2+"icon/down.png";
    };
})