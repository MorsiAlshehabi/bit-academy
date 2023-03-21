let antwoorden = ['Parijs', '8', 'Ijsselmeer'];

function controleerantwoord() {
    let goed = 0;
    let input1 = document.getElementById("eerstevraag").value;
    if (input1 == antwoorden[0]) {
        document.getElementById("eerstevraag");
        document.getElementById("eerstevraag").style.background = "#00FF00";
        goed += 1;
    } else {
        document.getElementById("eerstevraag");
        document.getElementById("eerstevraag").style.background = "#FF0000";
    }
    let input2 = document.getElementById("tweedevraag").value;
    if (input2 == antwoorden[1]) {
        document.getElementById("tweedevraag");
        document.getElementById("tweedevraag").style.background = "#00FF00";
        goed += 1;
    } else {
        document.getElementById("tweedevraag");
        document.getElementById("tweedevraag").style.background = "#FF0000";
    }
    let input3 = document.getElementById("derdevraag").value;
    if (input3 == antwoorden[2]) {
        document.getElementById("derdevraag");
        document.getElementById("derdevraag").style.background = "#00FF00";
        goed += 1;
    } else {
        document.getElementById("derdevraag");
        document.getElementById("derdevraag").style.background = "#FF0000";
    }
    if (goed == 3) {
        document.getElementById("goedeantwoorden").innerHTML = "Alle antwoorden zijn goed!";
    } else {
        document.getElementById("goedeantwoorden").innerHTML = "er zijn foute antwoorden";
    }
}


