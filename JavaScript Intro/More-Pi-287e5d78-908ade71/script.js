document.getElementById("but").onclick = function () {
    let d;
    let a;
    let c;
    let b;
    const p = 3.14;
    d = document.getElementById("number").value;
    console.log(d);
    a = p * d;
    b = p * ((d / 2) ** 2);
    c = b.toFixed(2);
    document.write("omtrek: " + a + "<br> oppervlakte: " + c);
};