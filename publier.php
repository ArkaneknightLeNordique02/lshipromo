<?php 
session_start();
$header = 'Publier une offre';
?>
<?php require 'portions/header.php'; ?>

<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 py-8 px-4">
    <div class="max-w-2xl mx-auto">
        <!-- En-tête compact -->
        <div class="mb-6">
            <h1 class="text-lg font-semibold text-gray-900 dark:text-white flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                Nouvelle offre promotionnelle
            </h1>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Remplissez les informations ci-dessous</p>
        </div>
        
        <!-- Messages flash compacts -->
        <?php if(isset($_SESSION['Succes'])) : ?>
            <div class="mb-4 p-3 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 rounded-lg flex items-center gap-2">
                <svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <p class="text-xs font-medium text-green-700 dark:text-green-300"><?php echo $_SESSION['Succes']; unset($_SESSION['Succes']); ?></p>
            </div>
        <?php endif; ?>
        
        <?php if(isset($_SESSION['Erreur'])) : ?>
            <div class="mb-4 p-3 bg-red-50 dark:bg-red-900/30 border border-red-200 dark:border-red-800 rounded-lg flex items-center gap-2">
                <svg class="w-4 h-4 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
                <p class="text-xs font-medium text-red-700 dark:text-red-300"><?php echo $_SESSION['Erreur']; unset($_SESSION['Erreur']); ?></p>
            </div>
        <?php endif; ?>
        
        <!-- Formulaire compact -->
        <form method="POST" action="controllers/creer_offre.php" enctype="multipart/form-data" 
              class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 divide-y divide-gray-200 dark:divide-gray-700">
            
            <!-- Image -->
            <div class="p-4">
                <label class="flex items-center gap-3 cursor-pointer group">
                    <div class="w-12 h-12 bg-gray-100 dark:bg-gray-700 rounded-lg border-2 border-dashed border-gray-300 dark:border-gray-600 group-hover:border-blue-500 dark:group-hover:border-blue-400 flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-400 group-hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Image du produit</span>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Cliquez pour télécharger (JPG, PNG)</p>
                    </div>
                    <input type="file" id="image" name="image" class="hidden" accept="image/*" required />
                </label>
            </div>
            
            <!-- Champs en grille compacte -->
            <div class="p-4 grid grid-cols-2 gap-4">
                <!-- Nom du produit -->
                <div class="col-span-2 sm:col-span-1">
                    <label class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">
                        Nom du produit
                    </label>
                    <input type="text" name="nom_produit" required
                           class="w-full px-3 py-2 text-sm bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 dark:focus:border-blue-400 dark:text-white placeholder-gray-400"
                           placeholder="Ex: Smartphone XYZ" />
                </div>
                
                <!-- Devise -->
                <div class="col-span-1">
                    <label class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">
                        Devise
                    </label>
                    <select name="devise" 
                            class="w-full px-3 py-2 text-sm bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 dark:focus:border-blue-400 dark:text-white">
                        <option>FC</option>
                        <option>USD</option>
                    </select>
                </div>
                
                <!-- Prix initial -->
                <div class="col-span-1">
                    <label class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">
                        Prix initial
                    </label>
                    <input type="number" name="prix_initial" required
                           class="w-full px-3 py-2 text-sm bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 dark:focus:border-blue-400 dark:text-white"
                           placeholder="0.00" step="0.01" />
                </div>
                
                <!-- Prix promo -->
                <div class="col-span-1">
                    <label class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">
                        Prix promo
                    </label>
                    <input type="number" name="prix_promo" required
                           class="w-full px-3 py-2 text-sm bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 dark:focus:border-blue-400 dark:text-white"
                           placeholder="0.00" step="0.01" />
                </div>
                
                <!-- Magasin -->
                <div class="col-span-2">
                    <label class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">
                        Magasin
                    </label>
                    <select name="magasin" 
                            class="w-full px-3 py-2 text-sm bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 dark:focus:border-blue-400 dark:text-white">
                        <option>Top Market</option>
                        <option>Kin Marché</option>
                        <option>Jambo</option>
                        <option>Recheio</option>
                    </select>
                </div>
            </div>
            
            <!-- Bouton d'action -->
            <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-b-xl flex justify-end">
                <button type="submit" 
                        class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors focus:ring-4 focus:ring-blue-500/30">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    Créer l'offre
                </button>
            </div>
        </form>
        
        <!-- Footer compact -->
        <div class="mt-4 text-center">
            <p class="text-xs text-gray-500 dark:text-gray-400">
                Les offres seront visibles immédiatement après publication
            </p>
        </div>
    </div>
</div>

<?php require 'portions/footer.php'; ?>