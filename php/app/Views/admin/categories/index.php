
<div class="produits-admin">
    <h1>Administrer les catégories</h1>

    <button class="btn-1">
        <a href="?p=admin.categories.add" class="btn-typo">Ajouter</a>
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
                <div class="center">
                <p><?= $category->id; ?></p>
                </div>
                <div class="center">
                    <p><?= $category->titre; ?></p>
                </div>
                <div class="edit">
                    <a class="btn btn-primary" href="?p=admin.categories.edit&id=<?= $category->id; ?>">Editer</a>
                    <form action="?p=admin.categories.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
