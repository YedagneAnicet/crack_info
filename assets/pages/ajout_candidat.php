<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../../node_modules/preline/dist/preline.js"></script>
  <title>Inscription Candidat</title>
</head>

<body>
  <div class="min-h-full">
    <?php include '../components/navbar.php'; ?>

    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">INSCRIPTION CANDIDAT</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 mt-5">
        <div class="overflow-hidden">
          <div class="max-w-[85rem]">
            <div class="relative mx-auto max-w-4xl grid space-y-5 sm:space-y-10">
              <form action="">
                <!-- Debut Section pour les informations personnelles  -->
                <div class="grid grid-cols-12 gap-4">
                  <div class="col-span-6">
                    <div class="mt-2">
                      <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nom</label>
                      <div class="mt-2">
                        <input id="name" name="name" type="text" required
                          class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>
                    <div class="mt-2">
                      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                      <div class="mt-2">
                        <input id="email" name="email" type="email" required
                          class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>
                    <div class="mt-2">
                      <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date Naissance</label>
                      <div class="mt-2">
                        <input id="date" name="date" type="date" required
                          class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>
                  </div>
                  <div class="col-span-2"></div>
                  <div class="col-span-4">
                    <div class="text-center align-baseline mt-6">
                      <img class="rounded-xl sm:size-48 lg:size-40 mx-auto"
                        src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="icon user">
                      <div class="mt-2 sm:mt-4">
                        <label class="block">
                          <span class="sr-only">Choisir votre fichier</span>
                          <input type="file" class="block w-full text-sm text-gray-500
                          file:me-4 file:py-2 file:px-4
                          file:rounded-lg file:border-0
                          file:text-sm file:font-semibold
                          file:bg-blue-600 file:text-white
        hover:file:bg-blue-700
        file:disabled:opacity-50 file:disabled:pointer-events-none
        dark:text-neutral-500
        dark:file:bg-blue-500
        dark:hover:file:bg-blue-400
      ">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Fin Section pour les informations personnelles  -->

                <!-- Debut informations specifiques -->
                <div class="grid grid-cols-12 gap-4">
                  <div class="col-span-6">
                    <div>
                      <label for="sexe" class="block text-sm font-medium leading-6 text-gray-900">Sexe</label>
                      <div class="flex gap-x-6">
                        <div class="flex">
                          <input type="radio" name="sexe"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="masculin">
                          <label for="masculin"
                            class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Masculin</label>
                        </div>

                        <div class="flex">
                          <input type="radio" name="sexe"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="feminin">
                          <label for="feminin" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Feminin</label>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <label for="anglais" class="block text-sm font-medium leading-6 text-gray-900">Anglais</label>
                      <div class="flex gap-x-6">
                        <div class="flex">
                          <input type="radio" name="anglais"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="faible">
                          <label for="faible" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Faible</label>
                        </div>
                        <div class="flex">
                          <input type="radio" name="anglais"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="intermediaire">
                          <label for="intermediaire"
                            class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Intermediaire</label>
                        </div>
                        <div class="flex">
                          <input type="radio" name="anglais"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="bien">
                          <label for="bien" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Bien</label>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <label for="niveau" class="block text-sm font-medium leading-6 text-gray-900">Niveau</label>
                      <div class="flex gap-x-6">
                        <div class="flex">
                          <input type="radio" name="niveau"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="bts">
                          <label for="bts" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">BTS</label>
                        </div>
                        <div class="flex">
                          <input type="radio" name="niveau"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="dut">
                          <label for="dut" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">DUT</label>
                        </div>
                        <div class="flex">
                          <input type="radio" name="niveau"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="licence">
                          <label for="licence" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Licence</label>
                        </div>
                        <div class="flex">
                          <input type="radio" name="niveau"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="master">
                          <label for="master" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Master</label>
                        </div>
                        <div class="flex">
                          <input type="radio" name="niveau"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="doctorat">
                          <label for="doctorat"
                            class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Doctorat</label>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <label for="specialite"
                        class="block text-sm font-medium leading-6 text-gray-900">Spécialité</label>
                      <div class="flex gap-x-6">
                        <div class="flex">
                          <input type="checkbox" name="specialite"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="data">
                          <label for="data" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Data
                            Science</label>
                        </div>
                        <div class="flex">
                          <input type="checkbox" name="specialite"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="ia">
                          <label for="ia" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Intelligence
                            Artificielle</label>
                        </div>
                        <div class="flex">
                          <input type="checkbox" name="specialite"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="developpement">
                          <label for="developpement"
                            class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Developpement Application</label>
                        </div>
                        <div class="flex">
                          <input type="checkbox" name="specialite"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="rit">
                          <label for="rit" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Réseau
                            Informatique</label>
                        </div>
                        <div class="flex">
                          <input type="checkbox" name="specialite"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="audit">
                          <label for="audit" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Audit
                            Informatique</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-span-2"></div>
                  <div class="col-span-4">
                    <div class="mt-3">
                      <label for="description"
                        class="block text-sm font-medium leading-6 text-gray-900">Bibliographie</label>
                      <div class="max-w-sm space-y-3">
                        <textarea id="description" name="description"
                          class="py-3 px-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                          rows="9" placeholder="Description"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Fin informations specifiques -->
                <div class="grid grid-cols-12 gap-4">
                  <div class="col-span-6">
                    <button type="button"
                      class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
                      Annuler
                    </button>
                    <button type="button"
                      class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                      Envoyer
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  </div>
  </main>
  </div>

</body>

</html>