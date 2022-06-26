<div class="produits-admin">
    <h1>Administrer les sous-catégories</h1>

    <button class="btn-1">
        <a href="?p=admin.souscategories.add" class="btn-typo">Ajouter</a>
    </button>

    <div class="pres">
        <div class="titres">
            <p class="titre">ID</p>
            <p class="titre">Titre</p>
            <p class="titre">Actions</p>
        </div>
        <span class="ligne-06"></span>
        <div class="elems">
            <?php foreach($items as $category): ?>
            <div class="elem">
                <p><?= $category->id; ?></p>
                <p><?= $category->titre; ?></p>
                <div class="edit">
                    <a class="btn btn-primary" href="?p=admin.souscategories.edit&id=<?= $category->id; ?>">Editer</a>
                    <form action="?p=admin.souscategories.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
