<div class='produits-admin'>
    <h1>Produits</h1>

    <button class="btn-1">
        <a href="?p=admin.produits.add" class="btn-typo">Ajouter
        </a>
    </button>
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Titre</td>
                <td>Image</td>
                <td>Image2</td>
                <td>Image3</td>
                <td>Prix</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produits as $produit): ?>
            <tr>
                <td><?= $produit->id;></td>
                <td><?= $produit->titre; ?></td>
                <td><img src="../public/img/upload/<?= $produit->img; ?>" style="width: 10%;"></td>
                <td><img src="../public/img/upload/<?= $produit->img2; ?>" style="width: 10%;"></td>
                <td><img src="../public/img/upload/<?= $produit->img3; ?>" style="width: 10%;"></td>
                <td><?= $produit->prix; ?>€</td>
                <td>
                    <a class="btn btn-primary" href="?p=admin.produits.edit&id=<?= $produit->id; ?>">Editer</a>
                    <form action="?p=admin.produits.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $produit->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

