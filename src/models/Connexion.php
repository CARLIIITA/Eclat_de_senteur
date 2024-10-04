<?php session_start();

//var_dump($_SESSION);

$title = "Connexion"; 
require_once(__DIR__."/variable.php"); 

// on commence par verifier si email et password existe dans la superglobale
if (isset($_POST["email"]) && isset($_POST["password"])) {
    // ensuite on verifie si l'information dans l'email est bien sous la forme d'un email
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        // si c'est pas le cas on affiche un format erreur
        //echo "Erreur dans le formulaire";
        // si c'est pas le cas rentre le message d'erreur dans une variable
        $errorMessage = "Erreur sur le formulaire";
    } else {
        // si c'est le cas on parcours le tableau des utilisateurs qui proviens des variables
        foreach ($users as $user) {
            // pour chaque utilisateur on verifie si l'email est le meme que celui envoyer dans le formulaire
            // puis si l'email existe dans le tableau on verifie que le mot de passe correspond
            if($user["email"] === $_POST["email"] && $user["password"] === $_POST["password"]) {
                //si c'est le cas on affiche a l'utilisateur un message de validation 
                //echo "Vous etes connectÃ©";
                //j'arrete le code si on a trouver l'utilisateur car ca ne sert a rien de continuer la boucle
                //return;
                $_SESSION["user"] = $user["email"];
                header("Location: /");
            } 
        }
        $errorMessage = "Email ou mot de passe incorrect";
    }
}
require_once(__DIR__."/views/login.view.php");
?>