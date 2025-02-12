function monMax(a,b){
    return Math.max(a,b);
}
function calculer(a,b){
    //verifier que le type de a est int
    if (typeof a === 'number' && typeof b === 'number') {
        return a+b;
    } else {
        return "Erreur";
    }
}
function calculer2(){
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    parseInt(a);
    parseInt(b);
    var res = calculer(a, b);
    alert(res);
}
document.getElementById("f").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    calculer2();
});

function max4(a,b,c,d){
    return Math.max(a,b,c,d);
}
function max8(a,b,c,d,e,f,g,h){
    return Math.max(a,b,c,d,e,f,g,h);
}