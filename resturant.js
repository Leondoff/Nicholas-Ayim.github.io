let navBar = document.querySelector('.navbar');
let headerEl = document.querySelector('.header')
let menu = document.querySelector('.menu-bars');

function nav(){
    if(document.querySelector('.navbar').style.display == 'none'){
        return document.querySelector('.navbar').style.display == 'block';

    }
    else{
        return document.querySelector('.navbar').style.display == 'none';

    }
}


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    headerEl.style.top = "0";
  } else {
    headerEl.style.top = "-70px";
  }
  prevScrollpos = currentScrollPos;
}


document.getElementById('search-icon').onclick = () =>{
    document.getElementById("search-form").classList.toggle('active');
}

document.getElementById("close").onclick = () =>{
    document.getElementById("search-form").classList.remove('active');
}

function nav(){
    if(navBar.style.display == "none"){
        navBar.style.display = "block"
    }
    else
    {
        navBar.style.display = "none"

    }
}
let searchForm = document.getElementById("search-form")

document.getElementById("search-icon").onclick = () =>{
    if(searchForm.style.display == "none")
    {
        searchForm.style.display = "flex"
    }
    else{
        searchForm.style.display = "none"
      
    }
}

document.getElementById("close").onclick = () =>{
        searchForm.style.display = "none"
      
}

var swiper = new Swiper(".home-slider",{
    slidesPerView : 1,
    spaceBetween: 30,
    centeredSlides :true,
    pagination:{
        el:".swiper-pagination",
        clickable:true,
    },
    autoplay:{
        delay:7500,
        disableoninteraction:false,
    },
    loop:true,

});

var swiper = new Swiper(".review_slider",{
    slidesPerView :3,
    spaceBetween:5,
    centeredSlides :true,
    pagination:{
        el:".swiper-pagination",
        clickable:true,
    },
    autoplay:{
        delay:7500,
        disableoninteraction:false,
    },
    loop:true,

});