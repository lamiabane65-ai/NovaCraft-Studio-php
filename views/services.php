<?php
require_once __DIR__ . "/../templates/header.php";
?>
<?php

$jsonData = file_get_contents(__DIR__ . '/../data/services.json');
$services = json_decode($jsonData, true);

?>
<section>
  <h2 class="text-3xl font-bold mb-10 text-center">Nos services</h2>

  <div class="grid md:grid-cols-3 gap-8">

    <?php foreach ($services as $service): ?>
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-semibold mb-2">
          <?= htmlspecialchars($service["title"]) ?>
        </h3>
        <p class="text-gray-600">
          <?= htmlspecialchars($service["description"]) ?>
        </p>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<?php
require_once __DIR__ . "/../templates/footer.php";
?>

