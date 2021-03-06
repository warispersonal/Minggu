const login = document.querySelector("#login")
const mobilelogin = document.querySelector("#mobile_login")
const register = document.querySelector("#register")
const mobileRegister = document.querySelector("#mobile_register")
var loginModal = document.querySelector("#login_modal")
const registerModal = document.querySelector("#register_modal")
const overlay = document.querySelector(".overlay")
const closeBtn = document.querySelector("#close_btn")
const hamburgerBtn = document.querySelector("#hamburger_btn")
const mobileNav = document.querySelector(".mobile_nav")
const closeBtn2 = document.querySelectorAll(".close_btn")

$(document).ready(function () {
    $(".drop_down").click(function () {
        if ($(this).children().css("top") == "70px") {
            $(this).children().css("top", "-200px")
        }
        else{
            $(this).children().css("top", "70px")

        }
    });
});


mobilelogin.addEventListener("click",()=>{
    overlay.style.display = "block"
    overlay.style.zIndex = "55"
    loginModal.style.bottom = "55%"
    setTimeout(() => {
        loginModal.style.bottom = "50%"
    }, 300);
})

mobileRegister.addEventListener("click",()=>{
    overlay.style.display = "block"
    registerModal.style.bottom = "55%"
    overlay.style.zIndex = "55"
    setTimeout(() => {
        registerModal.style.bottom = "50%"
    }, 300);
})
overlay.addEventListener("click",()=>{
    overlay.style.display = "none"
    loginModal.style.bottom = "-100%"
    registerModal.style.bottom = "-100%"
    mobileNav.style.right = "-250px"
    overlay.style.zIndex = "1"
})

hamburgerBtn.addEventListener("click", ()=> {
    mobileNav.style.right = "0px"
    overlay.style.display = "block"
})
closeBtn.addEventListener("click",()=>{
    overlay.style.display = "none"
    mobileNav.style.right = "-250px"
    
})

closeBtn2.forEach(closeBtn => {
    closeBtn.addEventListener("click",()=>{
        loginModal.style.bottom = "-100%"
        registerModal.style.bottom = "-100%"
        overlay.style.display = "none"
        overlay.style.zIndex = "1"
    })
    
});

login.addEventListener("click",()=>{
    overlay.style.display = "block"
    loginModal.style.bottom = "55%"
    setTimeout(() => {
        loginModal.style.bottom = "50%"
    }, 300);
})

register.addEventListener("click",()=>{
    overlay.style.display = "block"
    registerModal.style.bottom = "55%"
    setTimeout(() => {
        registerModal.style.bottom = "50%"
    }, 300);
})