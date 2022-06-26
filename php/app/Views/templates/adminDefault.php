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
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <div class="menu-burger">
                    <button class="btn-burger">
                            <img src="../public/ressources/icons/menu-burger.png" alt="" class="menu-burger">
                    </button>
                </div>
                <div class="hearder-responsive">
                    <div class="logo">
                        <a href="index.php?p=admin">
                            <img src="../public/ressources/logo/logo.svg"  alt="logo" class="logo">
                        </a>
                    </div>
                    <div class="drop-down-menu">
                        <ul class="header-ul">
                                <li>
                                    <a href="?p=admin.produits.index" class="text-header">Produits</a>
                                </li>
                            
                                <li>
                                    <a href="?p=admin.categories.index" class="text-header">Catégories</a>
                                </li>
                                <li>
                                    <a href="?p=admin.souscategories.index" class="text-header">Sous Catégories</a>
                                </li>
                                <li>
                                    <a href="?p=admin.tags.index" class="text-header">Tags</a>
                                </li>
                                <li>
                                    <a href="?p=admin.newsletter.index" class="text-header" > Newsletter</a>
                                </li>
                                <li>
                                    <a href="?p=admin.commandes.index" class="text-header" > Commandes</a>
                                </li>
                                <li>
                                    <a href="?p=admin.users.index" class="text-header" > Users</a>
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
                        <button class="btn-header shop">
                            <img src="../public/ressources/icons/shop.png"  alt="" class="icons-header">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="container">

        <?= $content; ?>

</div><!-- /.container -->