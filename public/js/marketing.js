let imgPath1 = "http://localhost/mycoaching/public/images/";
let marketing = document.getElementById('marketing');
let marketingUL = document.getElementById('marketingUL');
let downArrow1 = document.getElementById('downarrow1');
marketing.addEventListener('click',function(){
    if(marketingUL.style.display=='block'){
        marketingUL.style.display="none"
        downArrow1.src=imgPath1+"icon/right.png";
    }else{
        marketingUL.style.display="block";
        downArrow1.src=imgPath1+"icon/down.png";
    };
})

// quick links page js


let uploadlinks = document.getElementById('uploadlinks');
let uploadLinksModel = document.getElementById('uploadLinksModel');
let linksModelClose = document.getElementById('linksModelClose');
uploadlinks.addEventListener('click',function(){
    if(uploadLinksModel.style.display=='block'){
        uploadLinksModel.style="display:none";
    }
    else
    uploadLinksModel.style="display:block";
})

linksModelClose.addEventListener('click',function(){
    uploadLinksModel.style.display="none";
})
