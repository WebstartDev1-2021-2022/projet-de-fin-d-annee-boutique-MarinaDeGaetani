<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>

<div class="connexion-inscription">
    <div class="connection">
        <h2>Se Connecter</h2>
        <p class="para-18">Veuillez remplir les champs suivants <br>pour vous connecter à votre compte.</p>
        <form method="post" class="formulaire" action="index.php?p=users.login">
            <?= $form->input('username', 'User'); ?>
            <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
            <div class="mdp">
            <a href="" class="mdp-oublie">Mot de passe oublié ?</a>
            </div>
            <button type="submit" class="btn-1 btn-typo">Se connecter</button>
        </form>
    </div>
    <div class="sep"></div>
    <div class="inscription">
        <h2>S'inscrire</h2>
        <p class="para-18">Nouveau sur Unicare ? <br/>
        Créez un compte pour un paiement plus rapide.</p>
        <button class="btn-2">
            <a href="index.php?p=users.inscription" class="btn-typo">Créer un compte</a>
        </button>
    </div>
</div>
