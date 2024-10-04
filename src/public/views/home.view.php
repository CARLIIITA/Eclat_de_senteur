<?php require $_SERVER['DOCUMENT_ROOT']."/partials/head.php" ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/header.php" ?>
<div class="container">
      <!-- Élément carrousel -->
      <div class="carousel">
        <!-- Conteneur interne pour les diapositives -->
        <div class="carousel-inner">
          <!-- Conteneur pour les points de navigation -->
          <div class="carousel-dots"></div>
          <!-- Première diapositive -->
          <div class="slide">
            <!-- Image de la première diapositive -->
            <img src="/assets/homepage_img/home.gif" alt="gifpresentation" />
          </div>
          <!-- Deuxième diapositive -->
          <div class="slide">
            <!-- Image de la deuxième diapositive -->
            <img src="/assets/homepage_img/home2.gif" alt="gifmuscelnabil" />
          </div>
          <!-- Troisième diapositive -->
          <div class="slide">
            <!-- Image de la troisième diapositive -->
            <img src="/assets/homepage_img/home3.gif" alt="gifbrumesparfumées" />
          </div>
        </div>
      </div>
      <div>
        <p>Nos Coups de coeur</p>
      </div>
      <!-- Ici se trouve l'ensemble de mes cards presentant nos coups de coeurs -->
      <div class="Cpdecoeurcards">        
          </div>
        <div class="cards">
            <?php
            foreach ($products as $product):
            ?>
                <!-- <div class="column"> -->
                <div class="card">
                 <img src="<?=$product['img'];?>"
                        style="width: 100%" /> 
                    <h3><?=$product['name'] ?></h3>
                    <p class="price"><?= $product['price'] ?></p>
                    <p>
                        <?= $product['description'] ?>
                    </p>
                    <a href="/?ajouter=<?= $product['id'] ?>">Ajouter au panier</a>
                </div>
                <!-- </div> -->
            <?php endforeach; ?>
        </div>
      </div>
    </div>

<?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>