<div class="produits-admin">
    <h1>Ajout Sous Catégories</h1>
    <form method="post">
        <?= $form->input('titre', 'Tire de la catégorie'); ?>
        <?= $form->select('category_id', 'Catégorie', $categories); ?>
        <button class="btn-1">
            <p class="btn-typo">Sauvegarder</p>
        </button>
    </form>
</div>