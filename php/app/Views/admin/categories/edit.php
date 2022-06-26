<div class="produits-admin">
    <h1>Ajout catégorie</h1>
    <form method="post"  class="formulaire">
        <?= $form->input('titre', 'Nom de la catégorie'); ?>
        <?= $form->input('surTitre', 'Sur titre catégorie', ['type' => 'textarea']); ?>
        <?= $form->input('description', 'Description de la catégorie', ['type' => 'textarea']); ?>
        <button class="btn-1">
            <p class="btn-typo">Sauvegarder</p>
        </button>
    </form>
</div>