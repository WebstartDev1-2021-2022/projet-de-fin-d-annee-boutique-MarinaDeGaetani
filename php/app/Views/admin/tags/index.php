<div class="produits-admin">
    <h1>Administrer Tags</h1>

    <button class="btn-1">
        <a href="?p=admin.tags.add" class="btn-typo">Ajouter</a>
    </button>

    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Titre</td>
                <td>Actions</td>
            </tr>
        </thead>
         <tbody>
            <?php foreach($items as $category): ?>
            <tr>
                <td><?= $category->id; ?></td>
                <td><?= $category->titre; ?></td>
                <td>
                    <a class="btn btn-primary" href="?p=admin.tags.edit&id=<?= $category->id; ?>">Editer</a>
                    <form action="?p=admin.tags.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
