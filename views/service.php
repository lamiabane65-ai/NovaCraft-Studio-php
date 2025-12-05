<?php
require_once __DIR__ . "/../templates/headers.php";
?>w
<?php

$jsonData = file_get_contents(__DIR__ . '/../data/services.json');
$services = json_decode($jsonData, true);

?>

<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-8 text-center">Nos Services</h2>

    <div class="grid md:grid-cols-3 gap-6">
        <?php foreach ($services as $service): ?>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold mb-2"><?= $service["title"] ?></h3>
                <p class="text-gray-600"><?= $service["description"] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
require_once __DIR__ . "/../templates/footer.php";
?>cd 