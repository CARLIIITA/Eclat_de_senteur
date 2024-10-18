
<?php ob_start(); ?>
<div id="groupebouton">
    <div class="boutonsDoubles">
        <?php if(isset($_SESSION['user'])): ?>
            <a class="button" href="/deconnexion">Se Deconnecter</a>
        <?php else: ?>
            <a href="#" class="button" >Se Connecter</a>
            <a href="#" class="button">S'inscrire</a>
        <?php endif; ?>
    </div>
</div>

<?php $buttonsConnexionDeconnexion = ob_get_clean();?>