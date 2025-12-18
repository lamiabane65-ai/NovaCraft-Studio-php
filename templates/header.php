<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>NovaCraft Studio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100">

<header class="sticky top-0 z-50 bg-slate-900/80 backdrop-blur border-b border-slate-800">
  <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">

    <h1 class="text-xl font-extrabold tracking-wide text-cyan-400">
      NovaCraft
    </h1>

    <nav class="flex gap-8 text-sm uppercase tracking-wider">
      <a href="/home" class="<?= $page === 'home' ? 'text-cyan-400' : 'hover:text-cyan-400' ?>">Accueil</a>
      <a href="/about" class="<?= $page === 'about' ? 'text-cyan-400' : 'hover:text-cyan-400' ?>">À propos</a>
      <a href="/services" class="<?= $page === 'services' ? 'text-cyan-400' : 'hover:text-cyan-400' ?>">Services</a>
      <a href="/contact" class="<?= $page === 'contact' ? 'text-cyan-400' : 'hover:text-cyan-400' ?>">Contact</a>
    </nav>

  </div>
</header>

<main class="max-w-7xl mx-auto px-6 py-16">

