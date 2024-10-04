<?php require $_SERVER['DOCUMENT_ROOT']."/partials/head.php" ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/nav.php" ?>

<div id="inscription">
    <!-- <img class="visuel_parfum" src="../assets/themes/inscriptionimgbackground.png" alt=""> -->
    <form action="#" method="post" class="form">
        <div class="form-control">
            <label for="nom">Nom</label>
            <input type="text" name="nom" placeholder="Votre pseudo">
        </div>
        <div class="form-control">
            <label for="email">Adresse Mail</label>
            <input type="text" name="email" placeholder="example@mail.com">
        </div>
        <div class="form-control">
            <label for="motDePasse">Mot de Passe</label>
            <input type="password" name="motDePasse" placeholder="Mot de passe">
        </div>
        <div class="form-control">
            <label for="repetezMotPasse">Répétez Mot de passe</label>
            <input type="password" name="repetezMotPasse" placeholder="Répétez Votre Mot de Passe">
        </div>
        <button name="enregistrer" class="form-btn">S'inscrire</button>
    </form>
</div>


<?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>