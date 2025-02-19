let doc = document.addEventListener('DOMContentLoaded', function() {
    var color = prompt("Entrez une couleur : ");
    switch (color) {
        case "gris":
            document.body.style.backgroundColor = "grey";
            
            break;
        case "bleu":
            document.body.style.backgroundColor = "blue";
            break;
        case "vert": 
            document.body.style.backgroundColor = "green";
            break;
        default:
            alert("Couleur non reconnue");
            break;
    }
});