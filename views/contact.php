<?php
require_once __DIR__ . "/../templates/header.php";

?>

<section class="max-w-xl mx-auto">
  <h2 class="text-3xl font-bold mb-8 text-center">Contactez-nous</h2>


  <form class="space-y-6">
    <div>
      <label class="block mb-1 font-medium">Nom</label>
      <input type="text"
             class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-300">
    </div>

    <div>
      <label class="block mb-1 font-medium">Email</label>
      <input type="email"
             class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-300">
    </div>

    <div>
      <label class="block mb-1 font-medium">Message</label>
      <textarea rows="4"
                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-300"></textarea>
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
