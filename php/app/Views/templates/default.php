<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <link href="../public/css/style.css" rel="stylesheet">

</head>

<body>


<header>
    <!-- Classic Menu -->
    <nav class="navbar-head">
        <div class="container-nav">
            <div class="navbar-header">
                <div class="hearder-responsive">
                    <div class="menu-burger">
                        <button class="btn-burger">
                            <img src="../public/ressources/icons/menu-burger.png" alt="" class="menu-burger">
                        </button>
                    </div>
                    <div class="logo">
                        <a href="index.php">
                            <img src="../public/ressources/logo/logo.svg"  alt="logo" class="logo">
                        </a>
                    </div>
                    <div class="drop-down-menu">
                        <ul class="header-ul">
                                <li>
                                    <a href="index.php?p=posts.category&id=3" class="text-header">Maquillage</a>
                                
                                <ul class="sous-menu">
                                    <div class="sous-menu-div">
                                        <img src="../public/ressources/persons/persons_15.jpg" alt="" class="img-drop-down">
                                        <div class="div-text-drop-down">
                                             <div class="sous-div-text-drop-down">
                                                <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Yeux</a></li>
                                                <li class="text-dropdown"><a href="">Fards à paupières</a></li>
                                                <li class="text-dropdown"><a href="">Eyeliner</a></li>
                                                <li class="text-dropdown"><a href="">Sourcils</a></li>
                                                <li class="text-dropdown"><a href="">Mascara</a></li>
                                                <li class="text-dropdown"><a href="">Crayons à yeux</a></li>
                                                <li class="text-dropdown"><a href="">Bases paupières</a></li>
                                            </div>
                                            <div class="div-text-drop-down">
                                                <li  class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Lèvres</a></li>
                                                <li class="text-dropdown"><a href="">Gloss</a></li>
                                                <li class="text-dropdown"><a href="">Rouges à lèvres</a></li>
                                                <li class="text-dropdown"><a href="">Crayons à lèvres</a></li>
                                                <li class="text-dropdown"><a href="">Baumes à lèvres</a></li>
                                            </div>
                                        </div>
                                        <div class="div-text-drop-down">
                                            <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Teint</a></li>
                                            <li class="text-dropdown"><a href="">Fond de teint</a></li>
                                            <li class="text-dropdown"><a href="">Bases & Fixateurs</a></li>
                                            <li class="text-dropdown"><a href="">Correcteurs & Antis-cernes</a></li>
                                            <li class="text-dropdown"><a href="">Poudres</a></li>
                                            <li class="text-dropdown"><a href="">Highlighters</a></li>
                                            <li class="text-dropdown"><a href="">Contouring</a></li>
                                        </div>
                                    </div>
                                </ul>
                            
                            </li>
                            
                            <li>
                                <a href="index.php?p=posts.category&id=4" class="text-header-2"  style="text-decoration:none">Soins</a>

                            <ul class="sous-menu">
                                    <div class="sous-menu-div">
                                        <img src="../public/ressources/persons/persons_18.jpg" alt="" class="img-drop-down">
                                        <div class="div-text-drop-down">
                                             <div class="sous-div-text-drop-down">
                                                <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Visage</a></li>
                                                <li class="text-dropdown"><a href="">Nettoyants</a></li>
                                                <li class="text-dropdown"><a href="">Crèmes Visages</a></li>
                                                <li class="text-dropdown"><a href="">Sérums</a></li>
                                                <li class="text-dropdown"><a href="">Masques</a></li>
                                                <li class="text-dropdown"><a href="">Exfoliant</a></li>
                                                <li class="text-dropdown"><a href="">Lotions</a></li>
                                            </div>
                                            <div class="div-text-drop-down">
                                                <li  class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Cheveux</a></li>
                                                <li class="text-dropdown"><a href="">Shampoings</a></li>
                                                <li class="text-dropdown"><a href="">Après-Shampoings</a></li>
                                                <li class="text-dropdown"><a href="">Masques & Sérums</a></li>
                                                <li class="text-dropdown"><a href="">Produits Coiffant</a></li>
                                            </div>
                                        </div>
                                        <div class="div-text-drop-down">
                                            <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Corps</a></li>
                                            <li class="text-dropdown"><a href="">Douche & Bain</a></li>
                                            <li class="text-dropdown"><a href="">Hydratation</a></li>
                                            <li class="text-dropdown"><a href="">Gommage</a></li>
                                            <li class="text-dropdown"><a href="">Soins Mains & Pieds</a></li>
                                            <li class="text-dropdown"><a href="">Epilation</a></li>
                                            <li class="text-dropdown"><a href="">Déodorants</a></li>
                                            <li class="text-dropdown"><a href="">Huiles & Huiles Essentiels</a></li>
                                            <li class="text-dropdown"><a href="">Solaire</a></li>
                                        </div>
                                        <div class="div-text-drop-down">
                                            <div class="div-text-drop-down">
                                                <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Type de peau</a></li>
                                                <li class="text-dropdown"><a href="">Peau Sèche</a></li>
                                                <li class="text-dropdown"><a href="">Peau Mixte à Grasse</a></li>
                                                <li class="text-dropdown"><a href="">Peau Mature</a></li>
                                                <li class="text-dropdown"><a href="">Peau Sensible</a></li>
                                                <div class="catégorie-dropdown">
                                                <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Homme</a></li>
                                                <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Bio & Clean Beauty</a></li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            

                            </li>
                            <li>
                                <a href="index.php?p=posts.category&id=5" class="text-header-3"  style="text-decoration:none">Accessoires</a>

                            <ul class="sous-menu">
                                    <div class="sous-menu-div">
                                        <img src="../public/ressources/03_accessoire/viva-luna-studios-hYpHkpQG5ms-unsplash.jpg" alt="" class="img-drop-down">
                                        <div class="div-text-drop-down">
                                             <div class="sous-div-text-drop-down">
                                                <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Pinceau</a></li>
                                                <li class="text-dropdown"><a href="">Pinceaux Teint</a></li>
                                                <li class="text-dropdown"><a href=""> Pinceaux Yeux</a></li>
                                                <li class="text-dropdown"><a href="">Kits de Pinceaux</a></li>
                                                <li class="text-dropdown"><a href="">Nettoyants et Rangements</a></li>
                                                <li class="text-dropdown"><a href="">Blenders & Eponges</a></li>
                                                <li class="text-dropdown"><a href="">Houpettes</a></li>
                                            </div>
                                            <div class="div-text-drop-down">
                                                <li  class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Visage</a></li>
                                                <li class="text-dropdown"><a href="">Cils & Sourcils</a></li>
                                                <li class="text-dropdown"><a href="">Démaquillage</a></li>
                                                <li class="text-dropdown"><a href="">Barbes & Rasage</a></li>
                                                <li class="text-dropdown"><a href="">Trousse & Voyage</a></li>
                                            </div>
                                        </div>
                                        <div class="div-text-drop-down">
                                            <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Coiffure</a></li>
                                            <li class="text-dropdown"><a href="">Peigne & Brosse</a></li>
                                            <li class="text-dropdown"><a href="">Elastique & Brosse</a></li>
                                            <li class="text-dropdown"><a href="">Serre tête & Bandeaux</a></li>
                                            <li class="text-dropdown"><a href="">Pinces à Cheveux</a></li>
                                            <li class="text-dropdown"><a href="">Barette & Clic Clac</a></li>
                                            <li class="text-dropdown"><a href="">Epingles à Chignon</a></li>
                                            <li class="text-dropdown"><a href="">Brushing & Coloration</a></li>
                                            <div class="catégorie-dropdown">
                                                <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Homme</a></li>
                                                <li class="titre-header-dropdown"><a href="" class="titre-header-dropdown">Bio & Clean Beauty</a></li>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php?p=posts.category&id=7" class="text-header-4" > Meilleures Ventes</a>
                            </li>
                            <li>
                                <a href="index.php?p=posts.category&id=6" class="text-header-5" > Collabs</a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-icons-header">
                        <button class="btn-header search">
                            <img src="../public/ressources/icons/search.png" alt="" class="icons-header">
                        </button>
                        <button class="btn-header-2">
                            <a href="index.php?p=users.login">
                                <img src="../public/ressources/icons/profil.png" alt="" class="icons-header">
                            </a>
                        </button>
                        <button class="btn-header">
                            <a href="index.php?p=panier.index">
                                <img src="../public/ressources/icons/shop.png"  alt="" class="svg-shop">
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="container-infos" style="margin:0; padding:0; width:100%;">

        <?= $content; ?>

</div><!-- /.container -->

<div class="container-arrow">
    <div class="arrow-up">
        <div class="arrow">
            <img src="../public/ressources/icons/arrow-up.png" alt="" class="arrow-icon">
        </div>
    </div>
</div>
<footer>
    <div class="container-footer">
        <div class="footer-text">
            <p class="titre-footer">Contact</p>
            <p class="text-footer">Email : hello@unicare.com</p>
            <p class="text-footer">Téléphone : 09 15 25 03 10</p>
            <p class="text-footer">Horaires : Lundi - Vendredi</p>
            <p class="text-footer horaires">9h - 17h</p>
        </div>
        <div class="footer-text">
            <p class="titre-footer">À Propos</p>
            <a href="/" class="text-footer">FAQ</a>
            <a href="/" class="text-footer">Livraisons + Retours</a>
            <a href="/" class="text-footer">Echange/Remboursement</a>
            <a href="index.php?p=mentionsLégales.cgv" class="text-footer">CGV</a>
            <a href="index.php?p=mentionsLégales.mentionLégales" class="text-footer">Mentions légales</a>
        </div>
        <div class="footer-text">
            <p class="titre-footer">Qui sommes nous?</p>
            <a href="/" class="text-footer">Engagements</a>
            <a href="/" class="text-footer">Ingrediants</a>
            <a href="/" class="text-footer">Environnement</a>
            <a href="/" class="text-footer">Carrières</a>
            <a href="index.php?p=mentionsLégales.contact" class="text-footer">Contact</a>
        </div>
        <div class="footer-icons">
            <p class="titre-footer">Réseaux Sociaux</p>
            <img src="../public/ressources/icons/instagram.png" alt="instagram" class="icons-réseaux">
            <img src="../public/ressources/icons/tiktok.png" alt="tiktok" class="icons-réseaux">
            <img src="../public/ressources/icons/youtube.png" alt="youtube" class="icons-réseaux">
            <img src="../public/ressources/icons/facebook.png" alt="facebook" class="icons-réseaux">
        </div>
        <div class="newsletter">
            <p class="titre-footer news">Newsletter</p>
            <p class="text-news-letter">Recevez tous les mois notre news-letter en vous abonnant avec votre e-mails.</p>
            <div class="email-form">
                <input type="email" placeholder="Email" class="email">
                <button>
                    <img src="../public/ressources/icons/send.png" alt="" class="icon-email">
                </button>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
