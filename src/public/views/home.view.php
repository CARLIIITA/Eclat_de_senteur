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
            <img src="/assets/h1.png" alt="Image 1" />
          </div>
          <!-- Deuxième diapositive -->
          <div class="slide">
            <!-- Image de la deuxième diapositive -->
            <img src="/assets/h2.png" alt="Image 2" />
          </div>
          <!-- Troisième diapositive -->
          <div class="slide">
            <!-- Image de la troisième diapositive -->
            <img src="/assets/h3.png" alt="Image 3" />
          </div>
        </div>
      </div>
      <div>
        <p>Nos Coups de coeur</p>
      </div>
      <!-- Ici se trouve l'ensemble de mes cards presentant nos coups de coeurs -->
      <div class="Cpdecoeurcards">
        <div class="row">
          <div class="column">
            <div class="card">
              <img
                src="/assets/Victoria’s Secret Autumn Shore Fragrance Body Mist Spray Splash 8_4 Oz.jpg"
                alt="BrumeVsBareVanilla"
                style="width: 100%"
              />
              <h1>Brume Victoria’s Secret Bare Vanilla 250ml</h1>
              <p class="price">$19.99</p>
              <p>
                La Brume Victoria's Secret Bare Vanilla en 250ml est une
                véritble caresse de chaleur et de douceur.
              </p>
              <p><button>Ajouter au panier</button></p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img
                src="/assets/Victoria’s Secret Autumn Shore Fragrance Body Mist Spray Splash 8_4 Oz.jpg"
                alt="Denim Jeans"
                style="width: 100%"
              />
              <h1>Tailored Jeans</h1>
              <p class="price">$19.99</p>
              <p>Some text about the jeans..</p>
              <p><button>Ajouter au panier</button></p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img
                src="/assets/Victoria’s Secret Autumn Shore Fragrance Body Mist Spray Splash 8_4 Oz.jpg"
                alt="Denim Jeans"
                style="width: 100%"
              />
              <h1>Tailored Jeans</h1>
              <p class="price">$19.99</p>
              <p>Some text about the jeans..</p>
              <p><button>Ajouter au panier</button></p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img
                src="/assets/Victoria’s Secret Autumn Shore Fragrance Body Mist Spray Splash 8_4 Oz.jpg"
                alt="Denim Jeans"
                style="width: 100%"
              />
              <h1>Tailored Jeans</h1>
              <p class="price">$19.99</p>
              <p>Some text about the jeans..</p>
              <p><button>Ajouter au panier</button></p>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>