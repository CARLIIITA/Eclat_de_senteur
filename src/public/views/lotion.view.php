<?php require $_SERVER['DOCUMENT_ROOT']."/partials/head.php" ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/header.php" ?>
<?php
            foreach ($lotions as $lotion):
            ?>
              <div class="card">
                 <img src="<?=$lotion['img'];?>"
                        style="width: 100%" /> 
                    <h3><?=$lotion['name'] ?></h3>
                    <p class="price"><?= $lotion['price'] ?></p>
                    <p>
                        <?= $lotion['description'] ?>
                    </p>
                    <a href="/?addProduct=<?= $lotion['id'] ?>">Ajouter au panier</a>
                </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>

<?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>