<?php  require($_SERVER['DOCUMENT_ROOT'].'/partials/button-deconnexion-connexion.php'); ?>
<!--Ici se trouve mon header -->
    <!--Ici se trouve mon Logo -->
        <div>
            <img id="logo"src="/assets/logo/parfumLogo.png" alt="logo">   
       </div>
    <!--Ici se trouve mon icone du panier -->
    <div class="wrapper">
        <?=$buttonsConnexionDeconnexion?>
        <div  class="panier">
            <a href="/panier"><img id="iconepanier" src="/assets/logo/iconecaddie.png" alt="iconepanier"></a>
            <!-- <p class="textepanier">Mon panier</p> -->
            <p class="textepanier"><?=isset($_SESSION['panier']) ? count($_SESSION['panier']) : 0; ?></p>
        </div>
        
    </div>
     <!-- Ici se trouve mes boutons se connecter et s'inscrire -->
    </div>
    <!-- Ici commence ma nav -->
<?php  require $_SERVER['DOCUMENT_ROOT'].'/partials/nav.php'; ?>