<?php 
session_start();
$header = 'publier une offre ';
?>
<?php require 'portions/header.php'; ?>
<h1>publier une nouvelle offre promotionnelle</h1>

<?php if(isset($_SESSION['Succes'])) : ?>
  <p><?php echo $_SESSION['Succes'] ;
  unset($_SESSION['Succes']);
  ?></p>
  <?php endif?>
  <?php if(isset($_SESSION['Erreur'])) : ?>
  <p><?php echo $_SESSION['Erreur'] ;
  unset($_SESSION['Erreur']);
  ?></p>
  <?php endif?>
  
<form class="max-w-sm mx-auto"method= "POST" action="controllers/creer_offre.php" enctype="multipart/form-data">
  <div class="mb-5">
    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 leght:text-white" required>
      image du produit
    </label>
    <input type="file" id="image" name="image"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
     required />
  </div>
  <div class="mb-5">
    <label for="nom produit" class="block mb-2 text-sm font-medium text-gray-900 leght:text-white"required>
      Nom du produit
    </label>
    <input type="text" id="nom_produit" name="nom_produit"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
     required />
  </div>
  <div class="mb-5">
    <label for="prix initial" class="block mb-2 text-sm font-medium text-gray-900 leght:text-white"required>
      Prix initial
    </label>
    <input type="number" id="prix_initial" name="prix_initial"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
     required />
  </div>
  <div class="mb-5">
    <label for="prix promo" class="block mb-2 text-sm font-medium text-gray-900 leght:text-white"required>
      Prix promotionnel
    </label>
    <input type="number" id="prix_promo" name="prix_promo"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
     required />
  </div>
  <div class="mb-5">
    <label for="Devise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
      Devise
  </label>
  <select id="devise" name="devise"
   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <option>FC</option>
    <option>USD</option> 
  </select>
  </div>
   <div class="mb-5">
    <label for="Magasin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
      Magasin
  </label>
  <select id="magasin" name="magasin"
   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <option>Top Market</option>
    <option>Kin Marché</option>
    <option>Jambo</option>
    <option>Recheio</option>
    
  </select>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    Créer l'offre
  </button>
</form>




<?php require 'portions/footer.php'; ?>
