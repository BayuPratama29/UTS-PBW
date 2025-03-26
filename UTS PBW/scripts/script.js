document.addEventListener("DOMContentLoaded", function() {
    console.log("Website siap digunakan");

    const header = document.querySelector("header");
    window.addEventListener("scroll", function() {
        if (window.scrollY > 50) {
            header.style.backgroundColor = "#005bb5";
        } else {
            header.style.background = "linear-gradient(90deg, #0073e6, #00b4db)";
        }
    });
});
