window.addEventListener("load", () => {
    const body = document.querySelector("body"); 
    const toggleMobileMenu = document.querySelector(".mobile-menu-btn");
    const MobileMenu = document.querySelector(".mobile-menu-slideout");
    const overlay = document.querySelector(".overlay");

    toggleMobileMenu.addEventListener("click", () => {
        MobileMenu.classList.add("open-menu")
        overlay.classList.add("open-menu");
        body.classList.add("open-menu");

    });

    overlay.addEventListener("click", () => {
        console.log("Clickkkkkk");
        overlay.classList.remove("open-menu");
        MobileMenu.classList.remove("open-menu");
        body.classList.remove("open-menu");
    });
});