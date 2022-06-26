<div class="row">
    <div class="col-sm-8">
        <?php         
        foreach ($produits as $produit): ?>

            <h2><a href="<?= $produit->url ?>"><?=$produit->titre; ?></a></h2>
            <a href="<?= $produit->url ?>">
              <img src="../public/img/upload/<?= $produit->img; ?>" style="width: 10%;">
            </a>

            <h3>Catégorie</h3> 
            <p><em><?=$produit->categorie; ?></em></p>


            <h3>Sous catégorie</h3> 
            <hp><em><?=$produit->souscategorie; ?></em></p>

            <p><?=$produit->prix;?>€</p>



        <?php endforeach; ?>

    </div>

    <div class="col-sm-4">
        <ul>
        <?php foreach($categories as $categorie): ?>
            <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>