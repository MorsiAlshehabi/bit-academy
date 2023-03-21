const tekstBlok = document.querySelector('h1');
const body = document.querySelector("body");
const drukKnop = document.querySelector('button');
drukKnop.onclick = function () {
    body.style.backgroundColor = ("red");
    tekstBlok.innerText = "verander de achtergrond kleur!";
};