

<div class="scroll-1">
    <div class="bandeau-1">
        <a href="">
            <img src="../public/ressources/bandeaux/acceuil_01/bandeau-1.jpg" alt="" class="bandeau-img">
            <p></p>
        </a>
    </div>
    <div class="bandeau-img-mobiles">
        <img src="../public/ressources/bandeaux/acceuil_01/bandeau-1-mobile.jpg" alt="" class="bandeau-img-mobile">
    </div>
</div>

<div class="en-ce-moment">
    <h1 class="acceuil">En ce moment</h1>
    <div class="arrows">
        <div class="btn-arrows arrow-1" 
                id="precedent" 
                onclick="ChangeSlide(-1)">
            <img src="../public/ressources/icons/arrow-left.png" alt="" class="arrow-left">
        </div>
        <div class="slider-2">
            <?php foreach($moments as $produit): ?>
            <div class="produits slider">
                <button>
                    <img src="../public/img/upload/<?= $produit->img; ?>" alt="" class="produit-img">
                    <a href="<?= $produit->url; ?>"></a>
                </button>
                <button class="btn-heart" onclick="toggleHeart()" id="btnHeart">
                    <img src="../public/ressources/icons/heart.png" alt="" class="heart">
                </button>
                <a href="<?= $produit->url; ?>" class="titre-produit"><?= $produit->titre; ?></a>
                <div class="texte-apperçu">
                    <p class="prix-produit"><?= $produit->prix; ?> €</p>
                    <div class="etoiles">
                        <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                        <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                        <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                        <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                        <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                    </div>
                </div>
                <button class="btn-1">
                    <a href="<?= $produit->url; ?>" class="btn-typo">Commander</a>
                </button>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="btn-arrows arrow-2" 
                id="suivant"
                onclick="ChangeSlide(+1)">
            <img src="../public/ressources/icons/arrow-right.png" alt="" class="arrow-right">
        </div>
    </div>
</div>

<div class="blocs">
    <div class="blocs-2">
        <button class="button-bloc" href="index.php?p=posts.souscategory&id=15" >
            <img src="../public/ressources/bandeaux/acceuil_02/img_01.png" alt="" class="img-01">
        </button>
        <button class="button-bloc" href="index.php?p=posts.souscategory&id=3">
            <img src="../public/ressources/bandeaux/acceuil_02/img_02.png" alt="" class="img-02">
        </button>
    </div>
    <div class="blocs-3">
        <button class="button-bloc-2" href="index.php?p=posts.souscategory&id=44">
            <img src="../public/ressources/bandeaux/acceuil_02/img_03.png" alt="" class="img-03">
        </button>
        <button class="button-bloc-2"  href="index.php?p=posts.souscategory&id=4">
            <img src="../public/ressources/bandeaux/acceuil_02/img_04.png" alt="" class="img-04">
        </button>
        <button class="button-bloc-2" href="index.php?p=posts.souscategory&id=22">
            <img src="../public/ressources/bandeaux/acceuil_02/img_05.png" alt="" class="img-05">
        </button>
    </div>
</div>

<div class="les-incontournables">
    <h1 class="acceuil">Les Incontournables</h1>
    <div class="arrows">
        <button class="btn-arrows arrow-1">
            <img src="../public/ressources/icons/arrow-left.png" alt="" class="arrow-left">
        </button>
        <div class="slider-2">
            <?php foreach($incontournables as $produit): ?>
                <div class="produits slider">
                    <button>
                        <img src="../public/img/upload/<?= $produit->img; ?>" alt="" class="produit-img">
                        <a href="<?= $produit->url; ?>"></a>
                    </button>
                    <button class="btn-heart">
                        <img src="../public/ressources/icons/heart.png" alt="" class="heart">
                    </button>
                    <a href="<?= $produit->url; ?>" class="titre-produit"><?= $produit->titre; ?></a>
                    <div class="texte-apperçu">
                        <p class="prix-produit"><?= $produit->prix; ?> €</p>
                        <div class="etoiles">
                            <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                            <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                            <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                            <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                            <img src="../public/ressources/icons/star.png" alt="" class="etoile">
                        </div>
                    </div>
                    <button class="btn-1">
                        <a href="<?= $produit->url; ?>" class="btn-typo">Commander</a>
                    </button>
                </div>
                <?php endforeach; ?>
        </div>
        <button class="btn-arrows arrow-2">
            <img src="../public/ressources/icons/arrow-right.png" alt="" class="arrow-right">
        </button>
    </div>
</div>

<div class="unicare-avis">
    <h1 class="acceuil">Elles utilisent Unicare</h1>

    <div class="consomatrices">
        <div class="consomatrice">
            <img src="../public/ressources/persons/persons_05.jpg" alt="" class="persons">
            <div class="text-consom">
                <p class="para-gras util">Prénom</p>
                <div class="instagram">
                    <img src="../public/ressources/icons/instagram-rose.png" alt="" class="instagram-icon">
                    <p class="util">@jii</p>
                </div>
                <div class="age">
                    <p class="para-gras util">Age :</p>
                    <p class="util">-- ans</p>
                </div>
                <p class="util">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut libero eget nulla dolor mauris enim quis aliquet. Nisl imperdiet.”</p>
            </div>
        </div>
        <div class="consomatrice">
        <img src="../public/ressources/persons/persons_13.jpg" alt="" class="persons">
            <div class="text-consom">
                <p class="para-gras util">Prénom</p>
                <div class="instagram">
                    <img src="../public/ressources/icons/instagram-rose.png" alt="" class="instagram-icon">
                    <p class="util">@jii</p>
                </div>
                <div class="age">
                    <p class="para-gras util">Age :</p>
                    <p class="util">-- ans</p>
                </div>
                <p class="util">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut libero eget nulla dolor mauris enim quis aliquet. Nisl imperdiet.”</p>
            </div>
        </div>
        <div class="consomatrice">
        <img src="../public/ressources/persons/persons_10.jpg" alt="" class="persons">
            <div class="text-consom">
                <p class="para-gras util">Prénom</p>
                <div class="instagram">
                    <img src="../public/ressources/icons/instagram-rose.png" alt="" class="instagram-icon">
                    <p class="util">@jii</p>
                </div>
                <div class="age">
                    <p class="para-gras util">Age :</p>
                    <p class="util">-- ans</p>
                </div>
                <p class="util">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut libero eget nulla dolor mauris enim quis aliquet. Nisl imperdiet.”</p>
            </div>
        </div>
        <div class="consomatrice">
        <img src="../public/ressources/persons/persons_02.jpg" alt="" class="persons">
        <div class="text-consom">
            <p class="para-gras util">Prénom</p>
            <div class="instagram">
                <img src="../public/ressources/icons/instagram-rose.png" alt="" class="instagram-icon">
                <p class="util">@jii</p>
            </div>
            <div class="age">
                <p class="para-gras util">Age :</p>
                <p class="util">-- ans</p>
            </div>
            <p class="util">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut libero eget nulla dolor mauris enim quis aliquet. Nisl imperdiet.”</p>
        </div>
    </div>
</div>
<script src="../public/js/heart.js"></script>