document.addEventListener("DOMContentLoaded", function() {
    const filtrar = document.querySelector(".filtrar");
    const quad = document.querySelector(".quad");

    filtrar.addEventListener("click", function () {
        if (quad.style.visibility === "hidden") {
            quad.style.visibility = "visible";
        } else {
            quad.style.visibility = "hidden";
        }
    });
});