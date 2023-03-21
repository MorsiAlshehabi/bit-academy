const titel = document.querySelector("h1");
const paragrafen = document.querySelectorAll("p");

titel.style.color = "green";

paragrafen.forEach(
    function (e) {
        e.style.fontStyle = "Italic";
    },
);