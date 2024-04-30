<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
  header('Location: login.html');
  exit;
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];

if (isset($_POST['logout'])) {
  session_destroy();
  header('Location: login.html');
  exit;
}

?>

<nav class="bg-blue-900">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-end">
          <div class="flex items-center">
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
              <a href="../pages/dashboard.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Acceuil</a>
                <a href="../pages/ajout_candidat.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Inscription candidat</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Liste des candidats</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Passage des candidats</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Resultats</a>
                <form action="" method="POST">
                  <button type="submit" name="logout" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">DECONNEXION</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>