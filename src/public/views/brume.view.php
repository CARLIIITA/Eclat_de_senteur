<?php require $_SERVER['DOCUMENT_ROOT']."/partials/head.php" ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/header.php" ?>
<?php
            foreach ($brumes as $brume):
                // var_dump($parfum);
            ?>
              <div class="card">
                 <img src="<?=$brume['img'];?>" /> 
                    <h3><?=$brume['name'] ?></h3>
                    <p class="price"><?= $brume['price'] ?></p>
                    <p>
                        <?= $brume['description'] ?>
                    </p>
                    <a href="/?addProduct=<?= $brume['id'] ?>">Ajouter au panier</a>
                </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>