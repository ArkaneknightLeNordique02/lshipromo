<?php $header = "Publier une offre"; ?>
<?php require 'portions/header.php'; ?>
<h1>Publier une nouvelle offre promotionelle</h1>

<form class="max-w-sm mx-auto" method="POST" action="controllers/creer_offre.php" enctype="multipart/form_data.php" >
  <div class="mb-5">
    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">image produit</label>
    <input type="file" id="image" name ="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  </div>
  <div class="mb-5">
    <label for="nom_produit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du produit</label>
    <input type="text" id="nom_produit" name="nom_produit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  </div>
   <div class="mb-5">
    <label for="prix_initial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix initial</label>
    <input type="number" id="image" name ="prix_initial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  </div>
  <div class="mb-5">
    <label for="prix_promo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix promotionnelle </label>
    <input type="number" id="prix_promo" name="prix_promo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  </div>
  <div class="mb-5">
    <label for="Devise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir une Devise</label>
    <select id="Devise" name ="Devise"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
      <option>FC</option>
      <option>USD</option>
    </select>
  </div>
  <div class="mb-5">
    <label for="Magasins" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir un Magasin</label>
    <select id="Magasin" name ="Magasin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
      <option>Top Market</option>
      <option>Kin Marché</option>
      <option>Jambo</option>
      <option>Rechio</option>
    </select>
  </div>
  <div class="flex items-start mb-5">
     <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Créer</button></div>
</form>
<?php require 'portions/footer.php'; ?>