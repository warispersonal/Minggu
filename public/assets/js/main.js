const login = document.querySelector("#login")
const mobilelogin = document.querySelector("#mobile_login")
const register = document.querySelector("#register")
const mobileRegister = document.querySelector("#mobile_register")
const loginModal = document.querySelector("#login_modal")
const registerModal = document.querySelector("#register_modal")
const bankModal = document.querySelector("#bank_modal")
const confirmModal = document.querySelector("#confirm_modal")
const overlay = document.querySelector(".overlay")
const dropDown = document.querySelectorAll(".drop_down")
// const dropdownContent = document.querySelectorAll(".dropdown_content")
const closeBtn = document.querySelector("#close_btn")
const hamburgerBtn = document.querySelector("#hamburger_btn")
const mobileNav = document.querySelector(".mobile_nav")
const closeBtn2 = document.querySelectorAll(".close_btn")
const myModals = document.querySelectorAll(".my_modal")

if (document.getElementById("login") != null) {
    login.addEventListener("click", () => {
        overlay.style.display = "block"
        loginModal.style.bottom = "55%"
        setTimeout(() => {
            loginModal.style.bottom = "50%"
        }, 300);
    });
}

if (document.getElementById("register") != null) {
    register.addEventListener("click", () => {
        overlay.style.display = "block"
        registerModal.style.bottom = "55%"
        setTimeout(() => {
            registerModal.style.bottom = "50%"
        }, 300);
    })
}

if (document.getElementById("mobile_login") != null) {

    mobilelogin.addEventListener("click", () => {
        overlay.style.display = "block"
        overlay.style.zIndex = "9"
        loginModal.style.bottom = "55%"
        setTimeout(() => {
            loginModal.style.bottom = "50%"
        }, 300);
    })
}
if (document.getElementById("mobile_register") != null) {
    mobileRegister.addEventListener("click", () => {
        overlay.style.display = "block"
        registerModal.style.bottom = "55%"
        overlay.style.zIndex = "9"
        setTimeout(() => {
            registerModal.style.bottom = "50%"
        }, 300);
    })
}
overlay.addEventListener("click", () => {
    overlay.style.display = "none"
    myModals.forEach(myModal => {
        myModal.style.bottom = "-100%"
    });
    mobileNav.style.right = "-250px"
    overlay.style.zIndex = "8"
})

hamburgerBtn.addEventListener("click", () => {
    mobileNav.style.right = "0px"
    overlay.style.display = "block"
})
closeBtn.addEventListener("click", () => {
    overlay.style.display = "none"
    mobileNav.style.right = "-250px"

})

closeBtn2.forEach(closeBtn => {
    closeBtn.addEventListener("click", () => {
        myModals.forEach(myModal => {
            myModal.style.bottom = "-100%"
        });
        overlay.style.display = "none"
        overlay.style.zIndex = "1"
    })

});
