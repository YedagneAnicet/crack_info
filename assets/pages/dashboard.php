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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body>
<div class="min-h-full">
    <nav class="bg-blue-900">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-end">
          <div class="flex items-center">
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Inscription candidat</a>
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
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">CRACK INFO 24</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 mt-5">
        <div class="overflow-hidden">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-20">
              <div class="relative mx-auto max-w-4xl grid space-y-5 sm:space-y-10">
                <div class="text-center">
                  <h1 class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200"> BIENVENUE <?php echo htmlspecialchars($user_name); ?></h1>
                  <h1 class="text-3xl font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200 text-blue-500 mt-10">CONCOURS CRACK INFO 2024</h1>
                </div>
              </div>
            </div>
          </div>
      </div>
    </main>
  </div>
  
</body>
</html>

