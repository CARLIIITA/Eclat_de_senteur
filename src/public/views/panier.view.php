<?php require $_SERVER['DOCUMENT_ROOT']."/partials/head.php" ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/header.php" ?>
<div class="cards">
    <?php if ($totalPrice === 0): ?>
        <p class="no-product">Vous n'avez aucun produit dans votre panier</p>
    <?php else: ?>
        <?php
        foreach ($_SESSION['cart'] as $product): ?>
            <div class="card">
                <img
                    src="<?=$product['img']?>" />
                <h3><?= $product['name'] ?></h3>
                <p class="price"><?= $product['price'] ?></p>
                <p>
                    <?= $product['description'] ?>
                </p>
                <a href="/panier?supression=<?= $product['id'] ?>">Supprimer du panier</a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>