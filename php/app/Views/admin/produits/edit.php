
<div class="produits-admin">
    <h1>Ajouter un produit</h1>
    <form method="post" enctype="multipart/form-data" class="formulaire">

        <?= $form->input('titre', 'Titre de l\'article'); ?>

        <?= $form->input('img', 'image du produit', ['type' => 'file']); ?>
        <?= $form->input('img2', 'image du produit', ['type' => 'file']); ?>
        <?= $form->input('img3', 'image du produit', ['type' => 'file']); ?>
        <?= $form->input('prix', 'Prix', ['type' => 'number']); ?>
        <?= $form->select('category_id', 'Catégorie', $categories); ?>

        <?= $form->select('sous_category_id', 'Sous catégorie', $sousCategories); ?>

        <?= $form->select('tags_id', 'Tags', $tags); ?>

        <?= $form->input('description', 'description', ['type' => 'textarea']); ?>
        
        <?= $form->input('utilisation', 'utilisation', ['type' => 'textarea']); ?>
        
        <?= $form->input('ingredients', 'ingredients', ['type' => 'textarea']); ?>
        <button class="btn-1">
            <p class="btn-typo">Sauvegarder</p>
        </button>
</form>
</div>