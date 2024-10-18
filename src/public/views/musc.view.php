<?php require $_SERVER['DOCUMENT_ROOT']."/partials/head.php" ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/header.php" ?>
<?php
            foreach ($muscs as $musc):
            ?>
              <div class="card">
                 <img src="<?=$musc['img'];?>" /> 
                    <h3><?=$musc['name'] ?></h3>
                    <p class="price"><?= $musc['price'] ?></p>
                    <p>
                        <?= $musc['description'] ?>
                    </p>
                    <a href="/?addProduct=<?= $musc['id'] ?>">Ajouter au panier</a>
                </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>