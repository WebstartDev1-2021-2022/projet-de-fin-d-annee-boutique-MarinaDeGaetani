
<div class="img-bandeau">
    <div class="titre-cate">
        <p class="nom-cate"><?= $categorie->titre ?></p>
    </div>
    <img src="../public/ressources/bandeaux/categorie/fond-cate.jpg" alt="">
</div>
<div class="pres-cate">
    <p class="sur-titre-cate"><?= $categorie->surTitre ?></p>
    <p class="description-cate"><?= $categorie->description ?></p>
    <div class="sous-cates">
        <div class="sous-cate">
            <img src="../public/ressources/catégories/sous-cate/sous-cat-1.jpg" alt="" class="sous-cate-imgs">
            <a href="index.php?p=posts.souscategories&id=3" class="sous-cat-a"></a>
        </div>
        <div class="sous-cate">
            <img src="../public/ressources/catégories/sous-cate/sous-cat-2.jpg" alt="" class="sous-cate-imgs">
            <a href="index.php?p=posts.souscategories&id=4" class="sous-cat-a"></a>
        </div>
        <div class="sous-cate">
            <img src="../public/ressources/catégories/sous-cate/sous-cat-3.jpg" alt="" class="sous-cate-imgs">
            <a href="index.php?p=posts.souscategories&id=5" class="sous-cat-a"></a>
        </div>
        <div class="sous-cate">
            <img src="../public/ressources/catégories/sous-cate/sous-cat-4.jpg" alt="" class="sous-cate-imgs">
            <a href="index.php?p=posts.souscategories&id=6" class="sous-cat-a"></a>
        </div>
        <div class="sous-cate">
            <img src="../public/ressources/catégories/sous-cate/sous-cat-5.jpg" alt="" class="sous-cate-imgs">
            <a href="index.php?p=posts.souscategories&id=7" class="sous-cat-a"></a>
        </div>
    </div>
</div>
<div class="articles">
    <div class="filtre">
        <p>-- produits trouvés</p>
        <span class="bottom"></span>

        <div class="select">
            <p>Trier</p>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Filtre ...</option>
                <option value="1">Les plus récents</option>
                <option value="2">Prix croissants</option>
                <option value="3">Prix Décroissants</option>
            </select>
        </div>
    </div>
    
    <div class="produits-category">
    <?php foreach($produits as $produit): ?>
        <div class="produits">
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

    <div class="btn-affichez-plus">
        <button class="btn-1">
            <a href="" class="btn-typo">Affichez plus</a>
        </button>
    </div>
</div>
