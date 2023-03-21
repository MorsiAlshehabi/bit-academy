const tekstBlok = document.querySelector ('p');
const drukKnop = document.querySelector ('button');
let aantalDrukken = 0;
drukKnop.onclick = function() {
    //console.log("je hebt op de knop geklikt!");
    aantalDrukken++;

    //console.log(aantalDrukken);
    tekstBlok.innerText = "je hebt " + aantalDrukken + " keer op de knop gedrukt.";
};

//tweede manner
function KlikOpDeKnop () {
    aantalDrukken++;
    
}