<?php

session_start();
require_once '../../config/dbconnect.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Requête pour récupérer le mot de passe haché de l'utilisateur
        $sql = "SELECT id, name, email, password FROM users WHERE email = :email";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Authentification réussie, définir les variables de session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];

            // Redirection vers une page de succès ou le tableau de bord de l'utilisateur
            header('location: ../html/dashboard.html');
        } else {
            // Authentification échouée, afficher un message d'erreur
            $_SESSION['login_error'] = "Email ou mot de passe incorrect.";
            header('location: ../html/login.html');
        }

    } catch (PDOException $e) {
        echo "Erreur lors de la connexion : " . $e->getMessage();
    }
}

?>
