<div class="panier">
  <h1>Panier</h1>
 
  <?php 
  if(!empty($panier)){ ?>
    <form action="index.php?p=panier.recapitulatif" method="POST" class="formulaire-panier">
        <?php foreach ($panier as $idProduit => $champs): ?>
          <input type="hidden" id="produit-id-<?=$idProduit?>" name="produit-id-<?=$idProduit?>"  class="form-control" value="<?= $idProduit?>">
          <input type="hidden" id="produit-<?=$idProduit?>-total" name="produit-<?=$idProduit?>-total" class="form-control" value="<?= $champs['prix']* $champs['nbr']?>">
          
          <div class="champs">
            
            <div class="champ-input">
              <label>Produit</label>
              <input type="text" id="produit-<?=$idProduit?>-titre-disabled" name="produit-<?=$idProduit?>-titre-disabled" class="form-control-pan" value="<?=$champs['titre']?>" disabled="disabled">
            </div>

            <div class="champ-input">
              <label>Nbr</label>
              <input type="number" id="produit-<?=$idProduit?>-nbr" name="produit-<?=$idProduit?>-nbr" class="form-control produit-nbr" value="<?=$champs['nbr']?>"  data-produit="<?=$idProduit?>" data-prix="<?=$champs['prix']?>" min="1">
            </div>
            
            <div class="champ-input">
              <label>Prix</label>
              <input type="text" id="produit-<?=$idProduit?>-unite-disabled" name="produit-<?=$idProduit?>-unite-disabled" class="form-control-pan" value="<?=$champs['prix']?>€" disabled="disabled">
            </div>

            <div  class="champ-input">
              <a href="">
                <img src="../public/ressources/icons/bean.png" alt="">
              </a>
            </div>
            
            <div class="champ-input">
              <input type="hidden" id="produit-<?=$idProduit?>-total-disabled" name="produit-<?=$idProduit?>-total-disabled" class="form-control produit-total" value="<?=$champs['prix'] * $champs['nbr']?>€" disabled="disabled">
            </div>
          </div>  
        <?php endforeach; ?>
          
          <span class="ligne-05"></span>

          <div class="champ-input-total">
              <label class="total">Total de la commande</label>
                <input type="text" id="commande-total-disabled" name="commande-total-disabled" class="form-control-pan total" value="<?=$prixTotalCommande?>€" disabled="disabled">
          </div>

          <div class="col-lg-3 col-3">
              <input type="hidden" id="commande-total" name="commande-total" class="form-control" value="<?=$prixTotalCommande?>">
          </div>
          
          <div class="valid-pan">
            <button class="btn-1">
              <p class="btn-typo">Valider le panier</p>
            </button>
          </div>
    </form>
  <?php
    }else{ ?>
      <p>Pas de panier</p>
  <?php
    }   ?>
</div>

<script src="../public/js/panier.js"></script>