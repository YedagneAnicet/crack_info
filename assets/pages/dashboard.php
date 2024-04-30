<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../../node_modules/preline/dist/preline.js"></script>
  <title>Dashboard</title>
</head>

<body>
  <div class="min-h-full">
    <?php include '../components/navbar.php'; ?>

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