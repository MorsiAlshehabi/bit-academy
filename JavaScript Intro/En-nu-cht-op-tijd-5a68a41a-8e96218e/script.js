function countup() {
    let h;
    let m;
    let s;
    let i;
    let datenow = new Date();
    h = datenow.getHours();
    m = datenow.getMinutes();
    s = datenow.getSeconds();
    i = "het is " + h + ":" + m + ":" + s;
    document.getElementById("tijd").innerHTML = i;
}
let conter = setInterval(countup, 2000);

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