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
                <img src="../assets/h1.png" alt="Image 1" />
            </div>
            <!-- Deuxième diapositive -->
            <div class="slide">
                <!-- Image de la deuxième diapositive -->
                <img src="../assets/h2.png" alt="Image 2" />
            </div>
            <!-- Troisième diapositive -->
            <div class="slide">
                <!-- Image de la troisième diapositive -->
                <img src="../assets/h3.png" alt="Image 3" />
            </div>
        </div>
    </div>

    <!-- Ici se trouve l'ensemble de mes cards presentant nos coups de coeurs -->
    <div class="Cpdecoeurcards">
        <h2>Nos Coups de coeur</h2>
        <div class="cards">
            <?php
            foreach ($products as $product):
            ?>
                <!-- <div class="column"> -->
                <div class="card">
                    <img
                        src="../assets/Victoria’s Secret Autumn Shore Fragrance Body Mist Spray Splash 8_4 Oz.jpg"
                        alt="BrumeVsBareVanilla"
                        style="width: 100%" />
                    <h3><?= $product['name'] ?></h3>
                    <p class="price"><?= $product['price'] ?></p>
                    <p>
                        <?= $product['description'] ?>
                    </p>
                    <a href="/?addProduct=<?= $product['id'] ?>">Ajouter au panier</a>
                </div>
                <!-- </div> -->

            <?php endforeach; ?>
        </div>
        <!-- <div class="row">
            <div class="column">
                <div class="card">
                    <img
                        src="../assets/Victoria’s Secret Autumn Shore Fragrance Body Mist Spray Splash 8_4 Oz.jpg"
                        alt="BrumeVsBareVanilla"
                        style="width: 100%" />
                    <h1>Brume Victoria’s Secret Bare Vanilla 250ml</h1>
                    <p class="price">$19.99</p>
                    <p>
                        La Brume Victoria's Secret Bare Vanilla en 250ml est une
                        véritble caresse de chaleur et de douceur.
                    </p>
                    <button>Ajouter au panier</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img
                        src="../assets/Victoria’s Secret Autumn Shore Fragrance Body Mist Spray Splash 8_4 Oz.jpg"
                        alt="Denim Jeans"
                        style="width: 100%" />
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans..</p>
                    <p><button>Ajouter au panier</button></p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img
                        src="../assets/Victoria’s Secret Autumn Shore Fragrance Body Mist Spray Splash 8_4 Oz.jpg"
                        alt="Denim Jeans"
                        style="width: 100%" />
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans..</p>
                    <p><button>Ajouter au panier</button></p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img
                        src="../assets/Victoria’s Secret Autumn Shore Fragrance Body Mist Spray Splash 8_4 Oz.jpg"
                        alt="Denim Jeans"
                        style="width: 100%" />
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans..</p>
                    <p><button>Ajouter au panier</button></p>
                </div>
            </div>
        </div> -->
    </div>
</div>