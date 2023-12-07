let e=document.getElementById("navbar");
function nav(){
    e.classList.toggle("visible");
}

var slideIndex= 0;
carousel();//For automatic slideshow,This function will run infinte 
           //times,it'll start as you refresh the page

function left(){
    var i;
    var x=document.getElementsByClassName('mySlides');
    for(i=0;i<x.length;i++){
        x[i].style.display = 'none';
    }

    slideIndex--;
    if(slideIndex<=0){
        slideIndex=x.length
    }
    x[slideIndex-1].style.display='block';
    
}
function right(){
    var i;
    var x=document.getElementsByClassName('mySlides');
    for(i=0;i<x.length;i++){
        x[i].style.display='none';
    }

    slideIndex++;
    if(slideIndex>x.length){
        slideIndex=0
    }
    x[slideIndex-1].style.display='block';
}

function carousel(){
    var i;
    var x=document.getElementsByClassName('mySlides');
    for(i=0;i<x.length;i++){
        x[i].style.display = 'none';
    }
    slideIndex++
    if(slideIndex>x.length){
        slideIndex=1
    }
    x[slideIndex-1].style.display='block';
    setTimeout(carousel,3000);
}