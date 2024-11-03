let imgPath = "http://localhost/mycoaching/public/images/";
let Offering = document.getElementById('offring');
let offeringUL = document.getElementById('offeringUL');
let downArrow = document.getElementById('downarrow');
let menuIcon = document.getElementById('menuicon');
let sidebar = document.getElementById('sidebar');
Offering.addEventListener('click',function(){
    if(offeringUL.style.display=='block'){
        offeringUL.style.display="none"
        downArrow.src=imgPath+"icon/right.png";
    }else{
        offeringUL.style.display="block";
        downArrow.src=imgPath+"icon/down.png";
    };
})

menuIcon.addEventListener('click',function(){
       console.log(sidebar.style.display);
})