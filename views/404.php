<?php
require_once __DIR__ . "/../templates/header.php";
?>

<section class="flex flex-col items-center justify-center text-center py-24 space-y-6">

  <img src="/assets/erreur.png" alt="Erreur 404" class="w-64">

  <h2 class="text-4xl font-extrabold text-cyan-400">
    Page introuvable
  </h2>

  <p class="text-slate-400 max-w-md">
    La page que vous recherchez n’existe pas ou a été déplacée.
  </p>

  <a href="/home"
     class="mt-6 inline-block bg-cyan-500 text-slate-900 px-8 py-4 rounded-xl font-semibold hover:bg-cyan-400 transition">
     Retour à l’accueil
  </a>

</section>

<?php
require_once __DIR__ . "/../templates/footer.php";
?>
