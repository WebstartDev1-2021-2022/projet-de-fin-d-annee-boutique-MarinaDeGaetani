

    <h1>Wishlist</h1>

    
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
