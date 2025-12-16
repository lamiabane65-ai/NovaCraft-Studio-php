<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>NovaCraft Studio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<header class="bg-white shadow">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    
    <h1 class="text-2xl font-bold text-indigo-600">
      NovaCraft Studio
    </h1>

    <nav class="space-x-6">
      <a href="/home"
         class="<?php echo $page === 'home' ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600'; ?>">
         Accueil
      </a>

      <a href="/about"
         class="<?php echo $page === 'about' ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600'; ?>">
         À propos
      </a>

      <a href="/services"
         class="<?php echo $page === 'services' ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600'; ?>">
         Services
      </a>

      <a href="/contact"
         class="<?php echo $page === 'contact' ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600'; ?>">
         Contact
      </a>
    </nav>

  </div>
</header>

<main class="max-w-7xl mx-auto px-6 py-10">
