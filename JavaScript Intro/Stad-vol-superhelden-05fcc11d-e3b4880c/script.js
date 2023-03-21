const requestUrl = 'https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json';

function requestJSON(url) {
    let request = new XMLHttpRequest();
    request.open('GET', url);
    request.send();
    request.onload = function () {
        let response = request.response;
        processResponse(response);
    }
}

function sendRequest() {
    requestJSON(requestUrl);
}

function processResponse(response) {
    // TODO schrijf hier je code
    document.getElementById("squadName").innerHTML = response["squadName"];
    document.getElementById("homeTown").innerHTML = response["homeTown"];
    document.getElementById("formed").innerHTML = response["formed"];
    document.getElementById("secretBase").innerHTML = response["secretBase"];
    document.getElementById("active").innerHTML = response["active"];

    for(let i = 0; i < response["members"].length; i++) {
        let table = document.getElementById("member-table");
        let row = table.insertRow(-1);
        let nameCell = row.insertCell(-1);
        let ageCell = row.insertCell(-1);
        let identityCell = row.insertCell(-1);
        let powerCell = row.insertCell(-1);
        nameCell.innerHTML = response["members"][i]["name"];
        ageCell.innerHTML = response["members"][i]["age"];
        identityCell.innerHTML = response["members"][i]["secretIdentity"];
        powerCell.innerHTML = response["members"][i]["powers"];
    }
}
sendRequest();