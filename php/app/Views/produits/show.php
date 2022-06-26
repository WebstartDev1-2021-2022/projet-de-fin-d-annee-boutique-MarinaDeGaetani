<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<div class="produit-infos">
    <div class="produit-imgs">
        <img src="../public/img/upload/<?= $produit->img; ?>" alt="" class="img-principale">
        <div class="produit-appercu">
            <button class="arrows">
                <img src="../public/ressources/icons/arrow-left.png" alt="" class="arrow-left">
            </button>
            <div class="box" onclick="changeImg(this)">
                <img src="../public/img/upload/<?= $produit->img; ?>" alt="" class="imgs-appercu">
            </div>
            <div class="box" onclick="changeImg(this)">
                <img src="../public/img/upload/<?= $produit->img2; ?>" alt="" class="imgs-appercu">
            </div>
            <div class="box" onclick="changeImg(this)">
                <img src="../public/img/upload/<?= $produit->img3; ?>" alt="" class="imgs-appercu">
            </div>
            <button class="arrows">
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
            <form method="post" action="index.php?p=panier.add">
                <div class="btn-panier">
                    <div class="plus-moins">
                        <input type="number" name="nbr" id="nbr" min="1" class="nbr-form-control" value="1">
                        <input type="hidden" name="idProduit" id="idProduit" class="form-control" value="<?=$produit->id?>">
                        <input type="hidden" name="prix" id="prix" class="form-control" value="<?=$produit->prix;?>">
                        <input type="hidden" name="titre" id="titre" class="form-control" value="<?=$produit->titre;?>">
                    </div>
                    <button class="ajout-panier">
                       <p class="btn-typo"> Ajouter au panier</p>
                    </button>
                </div>
            </form>
    
            <ul class="nav nav-tabs titre-details" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link titre-details active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Détails</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link titre-details" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Utilisation</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link titre-details" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Ingrédients</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active text-detail" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"><?= $produit->description; ?></div>
                <div class="tab-pane fade text-detail" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"><?= $produit->utilisation; ?></div>
                <div class="tab-pane fade text-detail" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0"><?= $produit->ingredients; ?></div>
            </div>

        </div>
</div>

<h2 class="h2-fiche-prod">Vous aimerez aussi</h2>
<div class="recommendation">
    <?php foreach($recommandations as $produit): ?>
     <div class="produits ombre">
        <button>
            <img src="../public/img/upload/<?= $produit->img; ?>" alt="" class="produit-img">
            <a href="<?= $produit->url; ?>"></a>
        </button>
        <button class="btn-heart">
            <img src="../public/ressources/icons/heart.png" alt="" class="heart">
        </button>
        <a href="<?= $produit->url; ?>" class="titre-produit"><?= $produit->titre; ?></a>
        <p class="prix-produit"><?= $produit->prix; ?> €</p>
         <button class="btn-1 sans-margin">
            <a href="" class="btn-typo">Ajouter au panier</a>
        </button>
    </div>
    <?php endforeach; ?>
</div>
<script src="../public/js/img-change.js"></script>
