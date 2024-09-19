<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>

<header>
    <div id="head">
        <!--Ici se trouve mon Logo -->
        <div>
            <img id="logo" src="../assets/logo/parfumLogo.png" alt="logo" />
        </div>
        <!--Ici se trouve mon icone du panier -->
        <div class="panier">
            <img
                id="iconepanier"
                src="../assets/icones/iconecaddie.png"
                alt="iconepanier" />
            <p class="textepanier">Mon panier</p>
        </div>
    </div>
    <!--Ici se trouve mes boutons se connecter et s'inscrire -->
    <div id="groupebouton">
        <div class="boutonsDoubles">
            <button href="#" class="bouton">Se Connecter</button>
            <button href="#" class="bouton">S'inscrire</button>
        </div>
    </div>
    <!--Ici commence ma nav -->
    <nav id="naviguation">
        <li><a href="#Parfums">Parfums</a></li>
        <li><a href="#Brumes">Brumes</a></li>
        <li><a href="#Huiles">Huiles</a></li>
        <li><a href="#Muscs">Muscs</a></li>
        <li><a href="#LaRevueParfumee">La Revue Parfumée</a></li>
        <!--Ici se trouve ma barre de recherche -->
        <input id="barre" type="text" placeholder="rechercher" />
    </nav>
</header>

<?= $content ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>