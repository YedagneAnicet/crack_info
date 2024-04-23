<?php

    try {
        $db = new PDO('mysql:host=localhost;dbname=bdcrackinfo24;charset=utf8', 'root', '');
    } catch (Exception $error) {
        die('Erreur ' . $error->getMessage());
    }
