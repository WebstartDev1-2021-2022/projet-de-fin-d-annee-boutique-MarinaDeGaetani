<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<div class="container-rec">
    <h1>Récapitulatif de la commande</h1>
        <div class="prods">
        <?php foreach($produitsAll['produit'] as $produit){ ?>
            <!--<div class="infos-recap">
                <p>Id : </*?=$produit['produit']->id ?></p>
            </div>-->
            <div class="infos-recap">
                <img src="../public/img/upload/<?= $produit['produit']->img; ?>" class="recap-img">
            </div>
            <div class="infos-recap">
                <p>Titre : <?=$produit['produit']->titre ?></p>
            </div>
            <div class="infos-recap">
                <p>Nbr : <?=$produit['produit-nbr'] ?></p>
            </div>
            <div class="infos-recap">
                <p>Total : <?=$produit['produit-total'] ?>€</p>
            </div>
        </div>
    <?php  
    }

    foreach($produitsAll['commande'] as $commande){ ?>
    <div class="com-recap-tot">
        <p>Total de la commande : <?=$commande?>€</p>
    </div>
    <?php 
    }?>
    <div class="com-recap-tot">
    <p><a href="index.php?p=panier.index" class="link-pink"> Modifier la commande</a></p>
    </div>
</div>

<form action="index.php?p=panier.confirmation" method="POST">

<?php foreach($produitsAll['produit'] as $id => $produit){ ?>

      <input type="hidden" name="produit-id-<?=$id;?>" id="produit-id-<?=$id;?>" value="<?=$id;?>">
      <input type="hidden" name="produit-titre-<?=$id;?>" id="produit-titre-<?=$id;?>" value="<?=$produit['produit']->titre;?>" >
      <input type="hidden" name="produit-nbr-<?=$id;?>" id="produit-nbr-<?=$id;?>" value="<?=$produit['produit-nbr']?>" >
      <input type="hidden" name="produit-total-<?=$id;?>" id="produit-total-<?=$id;?>" value="<?=$produit['produit-total']?>" >

<?php }?>

<?php foreach($produitsAll['commande'] as $commande){ ?>
  <input type="hidden" name="commande-total" id="commande-total" value="<?=$commande;?>" >
<?php }?>

<?php 
  if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])){
?>
  <input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['user']->id?>" >
<?php
  }  
?>

  <div class="container-rec">
        <div class="row">
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt="">
                    </div>
                    <div class="number">
                        <label class="fw-bold" for="">**** **** **** 1060</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                        <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png"
                            alt="">
                    </div>
                    <div class="number">
                        <label class="fw-bold">**** **** **** 1060</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                        <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png"
                            alt="">
                    </div>
                    <div class="number">
                        <label class="fw-bold">**** **** **** 1060</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                        <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card p-3">
                    <p class="mb-0 fw-bold h4">Payment Methods</p>
                </div>
            </div>
            <div class="col-12">
                <div class="card p-3">
                    <div class="card-body border p-0">
                        <p>
                            <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                aria-controls="collapseExample">
                                <span class="fw-bold">PayPal</span>
                                <span class="fab fa-cc-paypal">
                                </span>
                            </a>
                        </p>
                        <div class="collapse p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-8">
                                    <p class="h4 mb-0">Résumé</p>
                                    
                                    <?php foreach($produitsAll['commande'] as $commande){ ?>
                                      <p class="mb-0"><span class="fw-bold">Prix:</span><span
                                            class="c-green">:<?=$commande;?>€</span></p>

                                    <?php }?>
                                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                        nihil neque
                                        quisquam aut
                                        repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                        quis,
                                        iste harum ipsum hic, nemo qui!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border p-0">
                        <p>
                            <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                aria-controls="collapseExample">
                                <span class="fw-bold">Carte de crédit</span>
                                <span class="">
                                    <span class="fab fa-cc-amex"></span>
                                    <span class="fab fa-cc-mastercard"></span>
                                    <span class="fab fa-cc-discover"></span>
                                </span>
                            </a>
                        </p>
                        <div class="collapse show p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-lg-5 mb-lg-0  mb-3">
                                    <p class="h4 mb-0">Résumé</p>
                                    <?php foreach($produitsAll['commande'] as $commande){ ?>

                                    <p class="mb-0">
                                        <span class="fw-bold">Prix:</span>
                                        <span class="c-green">:<?=$commande;?>€</span>
                                    </p>

                                    <?php }?>
                                    
                                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                        nihil neque
                                        quisquam aut
                                        repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                        quis,
                                        iste harum ipsum hic, nemo qui!</p>
                                </div>
                                <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">Card Number</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">MM / yy</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input type="password" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">cvv code</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">name on the card</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100">Payer</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </form>