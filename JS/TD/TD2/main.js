var a = 3;
var b = 2;


function multiplie(mult1 = 8, mult2 = 8) {
    return mult1 * mult2;
}
function affiche(){
    alert("La multiplication de " + a + " et " + b +" est : " + multiplie(a,b) + " le resultat de la multiplication de " +b+ "x8 est de : " + multiplie(b));
}

var tab = [-2, 1, 4,-5, 100, -15];

function multiplier2(x) {
    for (var i = 0; i < tab.length; i++) {
        alert("Le résultat de la multiplication de " + x + " par " + tab[i] + " est " + multiplie(tab[i], x));
    }
}

function affiche2() {
    // Récupérer la longueur du tableau
    var longueur = tab.length;

    // Effectuer les multiplication
    for (let i = 0; i < longueur -1 ; i++) {
        alert(multiplie(tab[i], tab[i + 1]));
    }
}
// Fonction de tri
function trier(tab) {
    // Tri du tableau
    tab.sort(function(a, b) {return a-b});
    alert(tab);
}