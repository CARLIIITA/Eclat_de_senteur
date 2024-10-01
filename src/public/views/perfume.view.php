<?php require $_SERVER['DOCUMENT_ROOT']."/partials/head.php" ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/header.php" ?>
<?php
            foreach ($parfums as $parfum):
                // var_dump($parfum);
            ?>
              <div class="card">
                 <img src="<?=$parfum['img'];?>"
                        style="width: 100%" /> 
                    <h3><?=$parfum['name'] ?></h3>
                    <p class="price"><?= $parfum['price'] ?></p>
                    <p>
                        <?= $parfum['description'] ?>
                    </p>
                    <a href="/?addProduct=<?= $parfum['id'] ?>">Ajouter au panier</a>
                </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>

<?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>