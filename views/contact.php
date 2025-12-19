

<?php require_once __DIR__ . "/../templates/header.php"; ?>

<section class="max-w-xl mx-auto">
  <h2 class="text-3xl font-bold mb-8 text-center">Contactez-nous</h2>

  <?php if (!empty($success)): ?>
    <p class="bg-green-100 text-green-700 p-4 mb-6 rounded">
      <?= $success ?>
    </p>
  <?php endif; ?>

  <form method="POST" class="space-y-6">

    <div>
      <label>Nom</label>
      <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
      <?php if (isset($errors["name"])): ?>
        <p><?= $errors["name"] ?></p>
      <?php endif; ?>
    </div>

    <div>
      <label>Email</label>
      <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">
      <?php if (isset($errors["email"])): ?>
        <p><?= $errors["email"] ?></p>
      <?php endif; ?>
    </div>

    <div>
      <label>Message</label>
      <textarea name="message"><?= htmlspecialchars($message) ?></textarea>
      <?php if (isset($errors["message"])): ?>
        <p><?= $errors["message"] ?></p>
      <?php endif; ?>
    </div>

    <button>Envoyer</button>
  </form>
</section>

<?php require_once __DIR__ . "/../templates/footer.php"; ?>
