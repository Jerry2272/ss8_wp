changeIcon = (icons) => icons.classList.toggle('fa-times');

const header=document.querySelector(".navbar");
let lastScroll=window.scrollY;

window.addEventListener("scroll", () =>{
    if(lastScroll < window.scrollY){
        header.classList.add("navbar-hide");
    }else{
        header.classList.remove("navbar-hide");
    }
    lastScroll=scrollY
});