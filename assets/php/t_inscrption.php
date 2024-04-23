<?php

session_start();
require_once '../../config/dbconnect.php';

if (isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Préparation de la requête SQL pour l'insertion des données
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $db->prepare($sql);

        // Liaison des paramètres
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);

        // Exécution de la requête
        $stmt->execute();

        header('location: ../html/login.html');

    } catch (PDOException $e) {
        echo "Erreur lors de l'enregistrement : " . $e->getMessage();
    }
}

?>