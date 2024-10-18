<?php
require '../config/db.php';

// foreach ($users as $user) {
//     echo "<tr>";
//     echo "<td> {$user['email']}</td>";
//     echo "<td> {$user['password']}</td>";
//     echo "</tr>";
// }

$authentification = function($email, $password) use ($db){
    // die(var_dump($_POST));
    // Vérification que les données d'entrée sont bien formatées
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new InvalidArgumentException("L'adresse e-mail n'est pas valide.");
    }

    if (empty($password)) {
        throw new InvalidArgumentException("Le mot de passe ne peut pas être vide.");
    }

    // Préparer la requête SQL pour vérifier l'utilisateur
    $stmt = $db->prepare("SELECT id, email, role, name, password FROM user WHERE email = ?");
    
    if (!$stmt) {
        throw new RuntimeException("Échec de la préparation de la requête : " . $db->error);
    }

    // Lier les paramètres
    $stmt->bind_param("s", $email);

    // Exécuter la requête
    $stmt->execute();

    // Obtenir les résultats
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        return false; // Utilisateur non trouvé
    }

    // Récupérer les données de l'utilisateur
    $user = $result->fetch_assoc();

    // Fermer la déclaration préparée
    $stmt->close();

    // Vérifier si le mot de passe est correct (utilisation de password_verify pour comparer le hash)
    if (password_verify($password, $user['password'])) {
        unset($user['password']);
        return $user;
    }
    return false; // Mot de passe incorrect
};

$inscription = function($user) use ($db) {
    // Validation de l'email
    if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
        throw new InvalidArgumentException("L'adresse e-mail n'est pas valide.");
    }
    // Vérification de la non-vacuité du nom et du mot de passe
    if (empty($user['nom']) || empty($user['motDePasse'])) {
        throw new InvalidArgumentException("Le nom et le mot de passe ne peuvent pas être vides.");
    }
    // Vérification si l'utilisateur existe déjà dans la base de données
    $stmt = $db->prepare("SELECT id FROM user WHERE email = ?");
    if (!$stmt) {
        throw new RuntimeException("Échec de la préparation de la requête : " . $db->error);
    }
    // Liaison des paramètres
    $stmt->bind_param("s", $user['email']);
    $stmt->execute();
    $result = $stmt->get_result();

    // Si l'email existe déjà, on retourne une erreur
    if ($result->num_rows > 0) {
        $stmt->close();
        throw new RuntimeException("Cet e-mail est déjà utilisé.");
    }

    // Fermer la requête de vérification
    $stmt->close();

    // Hacher le mot de passe avant de l'insérer dans la base de données
    $hashedPassword = password_hash($user['motDePasse'], PASSWORD_DEFAULT);

    // Préparation de l'insertion dans la base de données
    $query = $db->prepare("INSERT INTO user(name, email, password) VALUES(?, ?, ?)");
    
    if (!$query) {
        throw new RuntimeException("Échec de la préparation de la requête d'insertion : " . $db->error);
    }

    // Liaison des paramètres (nom, email, mot de passe haché)
    $query->bind_param('sss', $user['nom'], $user['email'], $hashedPassword);

    // Exécution de la requête d'insertion
    if (!$query->execute()) {
        throw new RuntimeException("Échec de l'exécution de la requête : " . $query->error);
    }

    // Fermer la requête d'insertion
    $query->close();

    return true; // Succès de l'inscription
};
