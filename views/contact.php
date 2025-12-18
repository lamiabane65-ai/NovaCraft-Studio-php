<?php
require_once __DIR__ . "/../templates/header.php";

$errors = [];
$success = "";
$name = "";
$email = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "") {
        $errors["name"] = "Le nom est obligatoire";
    }

    if ($email === "") {
        $errors["email"] = "L'email est obligatoire";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email invalide";
    }

    if ($message === "") {
        $errors["message"] = "Le message est obligatoire";
    }

    if (empty($errors)) {
        $success = "Votre message a été envoyé avec succès.";
        $name = $email = $message = "";
    }
}
?>

<section class="max-w-xl mx-auto">
  <h2 class="text-3xl font-bold mb-8 text-center">Contactez-nous</h2>

  <?php if ($success): ?>
    <p class="bg-green-100 text-green-700 p-4 mb-6 rounded">
      <?= $success ?>
    </p>
  <?php endif; ?>

  <form method="POST" class="space-y-6">

    <div>
      <label class="block mb-1 font-medium">Nom</label>
      <input type="text" name="name"
             value="<?= htmlspecialchars($name) ?>"
             class="w-full border border-gray-300 rounded px-4 py-2">
      <?php if (isset($errors["name"])): ?>
        <p class="text-red-500 text-sm"><?= $errors["name"] ?></p>
      <?php endif; ?>
    </div>

    <div>
      <label class="block mb-1 font-medium">Email</label>
      <input type="email" name="email"
             value="<?= htmlspecialchars($email) ?>"
             class="w-full border border-gray-300 rounded px-4 py-2">
      <?php if (isset($errors["email"])): ?>
        <p class="text-red-500 text-sm"><?= $errors["email"] ?></p>
      <?php endif; ?>
    </div>

    <div>
      <label class="block mb-1 font-medium">Message</label>
      <textarea name="message" rows="4"
                class="w-full border border-gray-300 rounded px-4 py-2"><?= htmlspecialchars($message) ?></textarea>
      <?php if (isset($errors["message"])): ?>
        <p class="text-red-500 text-sm"><?= $errors["message"] ?></p>
      <?php endif; ?>
    </div>

    <button
      class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition w-full">
      Envoyer
    </button>

  </form>
</section>

<?php
require_once __DIR__ . "/../templates/footer.php";
?>

