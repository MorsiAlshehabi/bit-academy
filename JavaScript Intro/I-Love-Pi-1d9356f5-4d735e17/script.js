document.getElementById("but").onclick = function() {
    d = document.getElementById("number").value;
    console.log(d);
    const p = 3.14; 
    let a;
    a = p * d;
    document.write("de omtrek van de cirkel is " + a);
    }