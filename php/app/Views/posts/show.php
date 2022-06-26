
<div class="produit-infos">
    <div class="produit-imgs">
        <img src="../public/img/upload/<?= $produit->img; ?>" alt="" class="img-principale">
        <div class="produit-appercu">
            <button>
                <img src="../public/ressources/icons/arrow-left.png" alt="" class="arrow-left">
            </button>
            <img src="../public/img/upload/<?= $produit->img2; ?>" alt="" class="imgs-appercu">
            <img src="../public/img/upload/<?= $produit->img3; ?>" alt="" class="imgs-appercu">
            <button>
                <img src="../public/ressources/icons/arrow-right.png" alt="" class="arrow-right">
            </button>
        </div>
    </div>
    <div class="produit-texte">
        <div class="notes">
            <div class="etoiles-fp">
                    <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                    <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                    <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                    <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                 <img src="../public/ressources/icons/star.png" alt="" class="etoile">
            </div>
            <a href="" class="nombres-produit" >-- Notes</a>
        </div>
        <h2><?= $produit->titre; ?></h2>
        <p class="tags"><?= $produit->categorie; ?></p>
        <p class="prix-text"><?= $produit->prix; ?> € (ml, g)</p>
        <div class="btn-panier">
            <div class="plus-moins">
                <button class="plus">
                    <img src="../public/ressources/icons/less.png" alt="">
                </button>
                <p class="">1</p>
                <button class="moins">
                    <img src="../public/ressources/icons/more.png" alt="">
                </button>
            </div>
            <button class="ajout-panier">
               <a href=""  class="btn-typo"> Ajouter au panier</a>
            </button>
        </div>
    
        <div class="details-produits">
            <div class="texts-details">
                <div class="">
                    <button class="active-tab">
                        <p class="titre-details">Ingredients</p>
                    </button>
                     <button class="">
                        <p class="titre-details">Utilisation</p>
                    </button>
                    <button class="">
                        <p class="titre-details">Ingredients</p>
                    </button>
                </div>
                <div class="">
                    <p class="text-detail active-tab-content"><?= $produit->description; ?></p>
                    <p class="text-detail"><?= $produit->utilisation; ?></p>
                    <p class="text-detail"><?= $produit->ingredients; ?></p> 
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="h2-fiche-prod">Vous aimeriez aussi</h2>
<div class="recommendation">
     <div class="produits ombre">
        <button>
            <img src="../public/ressources/01_maquillage/always-an-optimist/01.webp" alt="" class="produit-img">
            <a href="index.php?p=posts.show"></a>
        </button>
        <button class="btn-heart">
            <img src="../public/ressources/icons/heart.png" alt="" class="heart">
        </button>
        <a href="index.php?p=posts.show" class="titre-produit">Produit</a>
        <p class="prix-produit">Prix €</p>
         <button class="btn-1 sans-margin">
            <a href="" class="btn-typo">Ajouter au panier</a>
        </button>
    </div>
</div>


<h2 class="h2-fiche-prod">Notes & Commentaires</h2>
<div class="note-génerale">
    <p class="note-5"></p>
    <div class="etoiles">
        <img src="../public/ressources/icons/star.png" alt="" class="etoile">
        <img src="../public/ressources/icons/star.png" alt="" class="etoile">
        <img src="../public/ressources/icons/star.png" alt="" class="etoile">
        <img src="../public/ressources/icons/star.png" alt="" class="etoile">
        <img src="../public/ressources/icons/star.png" alt="" class="etoile">
     </div>
     <p class="nombre-avis"></p>
</div>
<div class="nombres-etoiles">
    <div>

    </div>
</div>
<script src="main.js"></script>