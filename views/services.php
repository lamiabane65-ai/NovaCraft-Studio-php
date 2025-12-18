<?php
require_once __DIR__ . "/../templates/header.php";

$services = [];

$jsonFile = __DIR__ . '/../data/services.json';

if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    $services = json_decode($jsonData, true);
}
?>

<section>
  <h2 class="text-4xl font-extrabold mb-12 text-center text-indigo-700">
    Nos services
  </h2>

  <div class="grid md:grid-cols-3 gap-10">

    <?php foreach ($services as $service): ?>
      <div class="relative overflow-hidden rounded-2xl shadow-lg 
                  bg-gradient-to-br from-gray-900 to-gray-700 text-white p-8">

        <span class="absolute top-0 right-0 bg-indigo-500 text-sm px-4 py-1 rounded-bl-xl">
          Service
        </span>

        <h3 class="text-2xl font-bold mb-4">
          <?= htmlspecialchars($service["title"]) ?>
        </h3>

        <p class="text-gray-200 leading-relaxed">
          <?= htmlspecialchars($service["description"]) ?>
        </p>

      </div>
    <?php endforeach; ?>

  </div>
</section>


<?php
require_once __DIR__ . "/../templates/footer.php";
?>


