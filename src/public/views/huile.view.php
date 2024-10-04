<?php require $_SERVER['DOCUMENT_ROOT']."/partials/head.php" ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/header.php" ?>
<?php
            foreach ($huiles as $huile):
                // var_dump($parfum);
            ?>
              <div class="card">
                 <img src="<?=$huile['img'];?>"
                        style="width: 100%" /> 
                    <h3><?=$huile['name'] ?></h3>
                    <p class="price"><?= $huile['price'] ?></p>
                    <p>
                        <?= $huile['description'] ?>
                    </p>
                    <a href="/?addProduct=<?= $huile['id'] ?>">Ajouter au panier</a>
                </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>

<?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>