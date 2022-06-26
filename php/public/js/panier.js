var elements = document.getElementsByClassName("produit-nbr");
var prixCommande = document.getElementById("commande-total");
var prixCommandeDisabled = document.getElementById("commande-total-disabled");
var prixTotalCommande = 0;
if (elements) {
  window.addEventListener("change", changePrix);
}

function changePrix() {
  prixTotalCommande = 0;
  for (var i = 0; i < elements.length; i++) {
    var valeur = elements[i].value;
    var produit = elements[i].dataset.produit;
    var prix = elements[i].dataset.prix;

    var prixUnite = document.getElementById("produit-" + produit + "-total");
    var prixUniteDisabled = document.getElementById(
      "produit-" + produit + "-total-disabled"
    );

    var resulatPrixtotal = prix * valeur;

    prixUniteDisabled.setAttribute("value", resulatPrixtotal + "€");
    prixUnite.setAttribute("value", resulatPrixtotal);

    prixTotalCommande = prixTotalCommande + resulatPrixtotal;

    prixCommandeDisabled.setAttribute("value", prixTotalCommande + "€");
    prixCommande.setAttribute("value", prixTotalCommande);
  }
}
