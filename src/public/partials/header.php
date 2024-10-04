<!--Ici se trouve mon header -->
    <div id="head">
    <!--Ici se trouve mon Logo -->
        <div>
            <img id="logo"src="/assets/logo/parfumLogo.png" alt="logo">   
       </div>
    <!--Ici se trouve mon icone du panier -->
       <div  class="panier">
            <a href="/cart"><img id="iconepanier" src="/assets/logo/iconecaddie.png" alt="iconepanier"></a>
            <!-- <p class="textepanier">Mon panier</p> -->
            <p class="textepanier"><?=isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?></p>
       </div>
    </div>
    <!-- Ici se trouve mes boutons se connecter et s'inscrire -->
    <?php  require $_SERVER['DOCUMENT_ROOT'].'/partials/button-deconnexion-connexion.php'; ?>
    <!-- Ici commence ma nav -->
    <?php  require $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>
</header>