const menu = document.querySelector("#mobile-menu")
const menuLinks = document.querySelector(".navbar-menu")
const navLogo = document.querySelector("#navbar-logo")
const body = document.querySelector('body')
const navbar = document.querySelector(".navbar")

//Affichage mobile
const mobileMenu = () =>{
    menu.classList.toggle('is-active')
    menuLinks.classList.toggle('active')
    // body.classList.toggle("active")
    // navbar.style.background = "#000"
}

menu.addEventListener('click',mobileMenu)

//Transparent nav to solid
window.onscroll = function(){
    if(window.pageYOffset>100){
        navbar.style.background = "#000"
        navbar.style.boxShadow = "0 2px 4px 0 rgba(0,0,0,0.6)";
    }else{
        navbar.style.background = "transparent"
        navbar.style.boxShadow = "none"
    }
}


// const toggleModal = (e) =>{
//     e.preventDefault()
//     // menuLinks.classList.toggle('active')
//     document.querySelector(".modal")
//         .classList.toggle("modal-hidden");
// }

document.querySelector("#show-modal")
    .addEventListener("click",toggleModal);

document.querySelector("#show-modal-bis")
    .addEventListener("click",toggleModal);


// document.querySelector("#res-btn")
//     .addEventListener("click",toggleModal);


// document.querySelector("#col-btn")
//     .addEventListener("click",toggleModal);

document.querySelector("#close-modal")
    .addEventListener("click",toggleModal);
