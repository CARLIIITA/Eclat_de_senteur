<?php require $_SERVER['DOCUMENT_ROOT']."/partials/head.php" ?>
<?php require $_SERVER['DOCUMENT_ROOT']."/partials/nav.php" ?>
<div id="connexion">
    <!-- <img class="visuel_parfum" src="../assets/themes/inscriptionimgbackground.png" alt=""> -->
    <form action="#" method="post" class="form">
        <div class="form-control">
            <label for="email">Adresse Mail</label>
            <input type="text" name="email" placeholder="example@mail.com">
        </div>
        <div class="form-control">
            <label for="motDePasse">Mot de Passe</label>
            <input type="password" name="motDePasse" placeholder="Mot de passe">
        </div>
        <button name="connexion" class="form-btn">Se connecter</button>
    </form>
</div>
    <?php if(isset($errorMessage)){
        echo "<p class = 'text-danger'>".$errorMessage."</p>";
    } ?>
    <?php require $_SERVER['DOCUMENT_ROOT']."/partials/footer.php" ?>