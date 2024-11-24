<div class="cards">
    <?php if ($totalPrice === 0): ?>
        <p class="no-product">Vous avez aucun produit dans votre panier</p>
    <?php else: ?>
        <?php
        foreach ($_SESSION['cart'] as $product): ?>
            <div class="card">
                <img
                    src="../assets/Victoria’s Secret Autumn Shore Fragrance Body Mist Spray Splash 8_4 Oz.jpg"
                    alt="BrumeVsBareVanilla" />
                <h3><?= $product['name'] ?></h3>
                <p class="price"><?= $product['price'] ?></p>
                <p>
                    <?= $product['description'] ?>
                </p>
                <a href="/cart/delete?id=<?= $product['id'] ?>">Supprimer du panier</a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>