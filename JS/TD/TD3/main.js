function monMax(a,b){
    return Math.max(a,b);
}
function calculer(a,b){
    //verifier que le type de a est int
    if (typeof a === 'integer' && typeof b === 'integer') {
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
function aleatoire(a,b){
    return Math.floor(Math.random() * (b - a + 1)) + a;
}   
function fctAleaGuess(){
    var a = document.getElementById("a2").value;
    var b = document.getElementById("b2").value;
    parseInt(a);
    parseInt(b);
    var res = aleatoire(a, b);
    var guess= document.getElementById("nbrGuess").value;
    parseInt(guess);
    if (guess == res){
        console.log("Bravo");
        alert("Bravo");
    } else {
        console.log("Perdu");
        alert("Perdu");
    }
}