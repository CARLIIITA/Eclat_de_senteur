<?php require $_SERVER['DOCUMENT_ROOT']."/partials/head.php" ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/header.php" ?>

<div class="cards">
    <?php if (!isset($totalPrice)): ?>
        <p class="no-product">Vous n'avez aucun produit dans votre panier</p>
    <?php else: ?>
        <?php
        foreach ($_SESSION['panier'] as $product): ?>
            <div class="card">
                <img
                    src="<?=$product['img']?>" />
                    <div class="description_product">
                        <h3><?= $product['name'] ?></h3>
                        <p class="price"><?=$product['price'] * $product['quantity'];?>€</p>
                        <p>
                            <?= $product['description'] ?>
                        </p>
                    </div>
                    <form method="POST" id="stock-form">
                        <input type="hidden" name="id_product" value="<?=$product['id'];?>" />
                        <div class="row">
                         <a href="/panier?supression=<?= $product['id'] ?>">Supprimer du panier</a>
                        <select name="quantity" id=""> 
                            <?php if($product['quantity'] <= $product['stock']):?>
                                <option selected value="<?=$product['quantity']?>">Quantité: <?=$product['quantity']?></option>     
                            <?php endif; ?>
                            <?php for($i = 1; $i < $product['stock']; $i++):?>
                                <option value="<?=$i?>"><?=$i?></option>
                            <?php endfor; ?>
                         </select>
                        </div>
                        <div class="row">
                          <button type="submit" class="btn" name="update_quantity">Mettre à jour</button>
                        </div>
                     </form>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<?php if(!empty($_SESSION['panier'])): ?>
<div class="validation">
    <h2>Prix total: <?=$totalPrice?> €</h2>
    <a href="/panier?validation" class="btn valider">Payer</a>
</div>
<?php endif; ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>