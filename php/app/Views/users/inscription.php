<?php if($errors): ?>
    <div class="alert alert-danger">
        <?=$messageError?>
    </div>
<?php endif; ?>

<div class="formulaire-inscription">
<h2 class="h2-inscription">S'inscrire</h2>
    <form method="post" class="formulaire" action="index.php?p=users.inscription">
      <div class="infos-1">
        <?= $form->input('firstname', 'Prénom'); ?>
        <?= $form->input('lastname', 'Nom'); ?>
        <?= $form->input('tel', 'Téléphone', ['type' => 'tel', 'maxlength' => '10']); ?>
        <?= $form->input('username', 'Pseudo'); ?>
        </div>
        <div class="infos-2">
        <?= $form->input('email', 'Email', ['type' => 'email']); ?>
        <?= $form->input('emailVerif', 'Confirmez Email', ['type' => 'email']); ?>
        <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
        <?= $form->input('passwordVerif', 'Confirmez Mot de passe', ['type' => 'password']); ?>
        <div class="btn">
          <button type="submit" class="btn-3 btn-typo">S'inscrire</button>
        </div>
      </div>
    </form>
</div>